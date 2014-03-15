<?php
$cache_time = 3600;
$cache_folder = 'cache/'; 
$cache_filename = $cache_folder.md5($_SERVER['REQUEST_URI']);
$cache_created  = (file_exists($cache_filename)) ? filemtime($cache_filename) : 0;  
if ((time() - $cache_created) < $cache_time) {  
	header('X-Cache: True');
	readfile($cache_filename); 	
	die();  
}  
ob_start();
function cedexdata($days){
	include('code/config.php');
	$auth = "oauth/token?client_id=$cedexisID&client_secret=$cedexisSecret&grant_type=client_credentials";
	$output = getmethedata($auth, '');
	$key = $output->value;

	$option = "v2/reporting/openmix.json?applicationIds=4&platformIds=10148%2C12444%2C7844%2C7845%2C7859%2C8423&timeRange=last_".$days."_days&results=providerId[sort%3Ameasurements+desc]%2CtimeRange%2Cmeasurements";
	$output = getmethedata($option, $key);
	$data = $output->facts;

	$option = "v2/reporting/openmix.json?applicationIds=4&platformIds=10148%2C12444%2C7844%2C7845%2C7859%2C8423&timeRange=last_".$days."_days&results=timeRange";
	$output = getmethedata($option, $key);
	$dates = $output->facts;
	$providersNames = array("10148"=>"MaxCDN", "12444"=>"CloudFlare", "7859"=>"PROMETEUS Italy", "7845"=>"LEAP Ukraine", "7844"=>"LEAP Portugal", "8423"=>"EXPERTVM Singapore");
	$providers = array("10148", "12444", "7859", "7845", "7844", "8423");

	foreach($providers as $provider){
		foreach($dates as $date){
			foreach($data as $point){
				if($date[0] == $point[1] AND $provider == $point[0])
					$result[$date[0]][$provider] = $point[2];
			}
		}
	}
	foreach ($dates as $date){
	$date = $date[0];
	?>
		   {"date": "<?php echo $date; ?>", "maxcdn": <?php echo $result[$date]['10148']; ?>, "cloudflare": <?php if(isset($result[$date]['12444'])){echo $result[$date]['12444'];}else{ echo '0';} ?>, "prom-it": <?php echo $result[$date]['7859']; ?>, "leap-ua": <?php echo $result[$date]['7845']; ?>, "leap-pt": <?php echo $result[$date]['7844']; ?>, "exvm-sg": <?php echo $result[$date]['8423']; ?>},
	<?php
	}

}
function getmethedata($param, $key){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://api.cedexis.com/api/$param");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER,array('Authorization: bearer '.$key.''));
	curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3");
	curl_setopt($ch, CURLOPT_VERBOSE, true);
	$output = json_decode(curl_exec($ch));
	curl_close($ch); 
	return $output; 
}
?>
<?php include('header.php'); ?>
<link rel="stylesheet" href="//cdn.jsdelivr.net/morris.js/0.4.3/morris.css">
<body><!-- top area starts -->
    <div class="menubar">
        <div class="github-fork-ribbon-wrapper left">
            <div class="github-fork-ribbon">
                <a href="https://github.com/jimaek/jsdelivr">Fork me on GitHub</a>
            </div>
        </div>
        <div class="container">
            <header class="clearfix">
                <a class="pull-left" href="index.php">
                    <img src="img/jsdelivr-logo.png" alt="jsdelivr.com" width="167" height="50">
                </a>
                <nav class="pull-right">
                    <ul>
                        <li><a href="network.php">Network</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a target="_blank" href="http://blog.jsdelivr.com">Blog <i class="icon-share-alt"></i></a></li>
                        <li id="submit"><a href="https://github.com/jimaek/jsdelivr" class="btn btn-info">Submit</a></li>
                    </ul>
                </nav>
            </header>
        </div><!-- container ends -->
    </div><!-- menu ends -->

    <div class="page-title">
        <div class="container">
            <h2>Charts and Reports</h2>
        </div><!-- container ends -->
    </div>


    <div class="container content">
	<div class="row text-center">
		<h3>Load Balancing Decisions - 30 Days</h3>
		<div id="decisions30" style="height: 350px;"></div>
		<h3>Load Balancing Decisions - 7 Days</h3>
		<div id="decisions7" style="height: 350px;"></div>
    </div>
    </div> <!-- /container -->
    <footer>
        <div class="container">
          <div class="row-fluid">
            <div id="shareme" class="span4" data-url="http://www.jsdelivr.com" data-text="jsDelivr - A free CDN for javascript and jquery plugins" data-title="share this page">  </div>
            <div class="span4"><p>Also visit: <a href="http://www.super-ping.com/">super-ping.com</a> and <a href="http://www.cdnperf.com/">CDNperf</a></p></div>
            <div class="span4">
                <p class="pull-right">Official sponsors:
                    <a href="http://www.uservoice.com">
                        <img alt="Sponsored by UserVoice" src="img/uservoice.png" width="122" height="27">
                    </a>
                <p>
            </div>
          </div><!-- row ends here -->
          <div class="row-fluid">
            <p>
                jsDelivr &copy; 2014 | <a href="https://twitter.com/jimaek">@jimaek</a>
             </p>
          </div><!-- row ends here -->
          <div class="row-fluid">
             <ul>
                <li>contact@jsdelivr.com | <a href="https://groups.google.com/forum/#!forum/jsdelivr">Mailing Group</a></li>
                <li>For Developers: <a href="https://github.com/jsdelivr/api">Official API</a></li>
                <li>Design based on NASA.Code</li>
            </ul>
           </div><!-- row ends here -->
        </div>
    </footer><!-- page-footer ends -->

    <script src="//cdn.jsdelivr.net/g/jquery@1.11.0,bootstrap@2.3.2,sharrre@1.3.5,raphael@2.1.2,morris.js@0.4.3"></script>
    <script>
		$(function () {
		  var decisions30 = [
			   <?php cedexdata('30'); ?>
		  ];
		  var decisions7 = [
			   <?php cedexdata('7'); ?>
		  ];
			Morris.Line({
			element: 'decisions30',
			data: decisions30,
			xkey: 'date',
			ykeys: ['maxcdn', 'cloudflare', 'prom-it', 'leap-ua', 'leap-pt', 'exvm-sg'],
			labels: ['MaxCDN', 'CloudFlare', 'PROMETEUS Italy', 'LEAP Ukraine', 'LEAP Portugal', 'EXPERTVM Singapore'],
			smooth: false,
			hideHover: true,
			lineColors: ['#0b62a4', '#000000', '#4da74d', '#afd8f8', '#edc240', '#cb4b4b', '#9440ed']
		  });
		  
		  Morris.Line({
			element: 'decisions7',
			data: decisions7,
			xkey: 'date',
			ykeys: ['maxcdn', 'cloudflare', 'prom-it', 'leap-ua', 'leap-pt', 'exvm-sg'],
			labels: ['MaxCDN', 'CloudFlare', 'PROMETEUS Italy', 'LEAP Ukraine', 'LEAP Portugal', 'EXPERTVM Singapore'],
			smooth: false,
			hideHover: true,
			lineColors: ['#0b62a4', '#000000', '#4da74d', '#afd8f8', '#edc240', '#cb4b4b', '#9440ed']
		  });
		});
		var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-31822709-1']);
        _gaq.push(['_trackPageview']);

        (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

        (function(w, d) { var a = function() { var a = d.createElement('script'); a.type = 'text/javascript';
        a.async = 'async'; a.src = '//' + ((w.location.protocol === 'https:') ? 's3.amazonaws.com/cdx-radar/' :
        'radar.cedexis.com/') + '01-11475-radar10.min.js'; d.body.appendChild(a); };
        if (w.addEventListener) { w.addEventListener('load', a, false); }
        else if (w.attachEvent) { w.attachEvent('onload', a); }
        }(window, document));
    </script>

    </body>
</html>
<?php
$fp = fopen($cache_filename, 'w');   // open the cache file for writing
fwrite($fp, ob_get_contents()); // save the contents of output buffer to the file
fclose($fp);                    // close the file
ob_end_flush();                 // Send the output to the browser
?>