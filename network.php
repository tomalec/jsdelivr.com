<?php include('header.php'); ?>

<body><!-- top area starts -->
    <div class="topbar"></div>
    <div class="menubar">
    <div class="github-fork-ribbon-wrapper right">
        <div class="github-fork-ribbon">
            <a href="https://github.com/jimaek/jsdelivr">Fork me on GitHub</a>
        </div>
    </div>
    <div class="container">
        <header class="clearfix">
            <a class="pull-left" href="index.php">
                <img src="img/jsdelivr-logo.png" alt="jsdelivr.com"/>
            </a>
            <nav class="pull-right">
                <ul>
                    <li><a href="network.php">Network</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a target="_blank" href="http://blog.jsdelivr.com">Blog <i class="icon-share-alt"></i></a></li>
                    <li id="submit"><a href="https://github.com/jimaek/jsdelivr" class="btn btn-danger">Submit</a></li>
                </ul>
            </nav>
        </header>
    </div><!-- container ends -->
    </div><!-- menu ends -->
    
    <div class="page-title">
    	<div class="container">
    	<h2>Network &amp; Features</h2>
    	</div><!-- container ends -->
    </div>
    
    
    <div class="container content"><!-- actual contaner for content starts -->
        <div class="row first well">
            <div class="seperator"><div class="lebrag"><h3>41 POP Locations all over the world</h3></div></div>
            <div>
                <iframe width='900' height='450' src='http://a.tiles.mapbox.com/v3/jimaek.map-6gmedxyr/mm/zoompan,zoomwheel.html'></iframe>
            </div>
        </div>

        <div id="#features" class="single row well">
            <div class="seperator"><div class="lebrag"><h3>Features</h3></div></div>
            <div class="span3">
                <ul>
                    <li>Global presence</li>
                    <li>DDOS Protected</li>
                    <li>Enterprise Hardware</li>
                </ul>
            </div>
            <div class="span3">
                <ul>
                    <li>Multi-CDN infrastructure</li>
                    <li>Failover systems</li>
                    <li>Akamai Hosted DNS</li>
                </ul>
            </div>
            <div class="span3">
                <ul>
                    <li>Unlimited traffic</li>
                    <li>Malware free</li>
                    <li>Community managed</li>
                </ul>
            </div>
            <div class="span2">
                <ul>
                    <li>RUM based routing</li>
                    <li>HTTPS Access</li>
                </ul>
            </div>
        </div>


<?php include('footer.php'); ?>