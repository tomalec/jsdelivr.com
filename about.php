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
    	<h2>About jsDelivr</h2>
    	</div><!-- container ends -->
    </div>
    
    
    <div class="container content"><!-- actual contaner for content starts -->
        <div class="row first well">
             <div class="span11">                
                <br/><br/><p>
                     jsDelivr is a free CDN (Content Delivery Network) where any web developer can host their files,
                     including CSS, fonts, JavaScript, jQuery plugins, etc.
                </p>
                <p>
                    jsDelivr is a public open-source CDN where anyone can submit a project to be hosted and delivered by our network.<br>
                    Most people probably know that Google hosts jQuery and a few other popular libraries.<br>
                    We don’t look at the popularity of the project to approve it for inclusion in jsDelivr.
                    Plus a lot more types of projects are allowed, like CSS frameworks, fonts, WordPress plugins etc.<br>
                    And by using GitHub, we allow the community to fully interact with jsDelivr by adding and updating files.
                </p>
                <h4>System</h4>
                <p>
                    What makes it super-fast is the unique multi-CDN infrastructure we use. MaxCDN (NetDNA) and CDN.net
                    (which is powered by the huge federated network of OnApp) agreed to combine their powers for the good
                    of the open source community and to sponsor us and become our CDN providers.<br>
                    All traffic to our CDN providers is load balanced based on availability and performance for each
                    individual user by another official sponsor of ours, the company Cedexis.<br>
                    This unique system not only gives us the best possible uptime and performance,
                    but also allows us to expand dynamically and add new providers on the fly.
                </p>
                <h4>Uptime</h4>
                <p>
                    All CDNs can go down and most have. But this is not the case with jsDelivr because we use 2 CDN providers.
                    If any of them goes down all traffic automatically will be switched to the remaining operational CDN.<br>
                    jsDelivr is the only public CDN to use multiple providers which makes it the most reliable of them all.
                </p>
                <h4>Security</h4>
                <p>
                    All files are hosted on a Push zone on NetDNA servers. The only way to access the files is by FTP using a whitelisted IP address.
                </p>
                </div>
           </div><!-- row ends -->

           <div class="row first well">
             <div class="span11">
                <div class="seperator"><div class="lebrag"><h3>Sponsors</h3></div></div>
                <div class="sponsor-row"><div class="sponsor-pic"><img src="img/sponsors/Cloudflare.png" alt=""/></div>
                <div class="sponsor-content"><h2>Cloudflare</h2>
                <p>CloudFlare is one of our CDN providers. They offer us worldwide coverage and the best possible speed for all users around the globe.
                </p></div><div class="clearfix"></div></div>

                <div class="sponsor-row"><div class="sponsor-pic"><img src="img/sponsors/cedexis.png" alt=""/></div>
                <div class="sponsor-content"><h2>Cedexis</h2>
                <p>
                    Cedexis allows us to do load balancing between an unlimited amount of CDN providers and failover in case one provider goes down.
                </p></div><div class="clearfix"></div></div>

                <div class="sponsor-row"><div class="sponsor-pic"><img src="img/sponsors/maxcdn.png" alt=""/></div>
                <div class="sponsor-content"><h2>MaxCDN</h2>
                <p>
                    MaxCDN is the second main CDN provider we use. They offer us worldwide coverage and the best possible speed for all users around the globe.
                </p></div><div class="clearfix"></div></div>
              
                <div class="sponsor-row"><div class="sponsor-pic"><img src="img/sponsors/builtwith.png" alt=""/></div>
                <div class="sponsor-content"><h2>Builtwith</h2>
                <p>
                    Builtwith.com generously provides us with reports that help us track the usage of jsDelivr.
                </p></div><div class="clearfix"></div></div>

                <div class="sponsor-row"><div class="sponsor-pic"><img src="img/sponsors/leapswitch.png" alt=""/></div>
                <div class="sponsor-content"><h2>Leapswitch</h2>
                <p>
                    <a href="http://leapswitch.com">leapswitch</a> is sponsoring us with custom POP locations in Portugal and Ukraine.
                </p></div><div class="clearfix"></div></div>

                <div class="sponsor-row"><div class="sponsor-pic"><img src="img/sponsors/prometeus.png" alt=""/></div>
                <div class="sponsor-content"><h2>Prometeus</h2>
                <p>
                    <a href="http://prometeus.net">Prometeus</a> is sponsoring us with custom POP location in Italy.
                </p></div><div class="clearfix"></div></div>

                <div class="sponsor-row"><div class="sponsor-pic"><img src="img/sponsors/secureax.png" alt=""/></div>
                <div class="sponsor-content"><h2>SecureAX</h2>
                <p>
                    <a href="http://www.secureax.com/">SecureAX</a> is sponsoring us with custom POP location in Singapore.
                </p></div><div class="clearfix"></div></div>

                <div class="sponsor-row"><div class="sponsor-pic"><img src="img/sponsors/jetdino.png" alt=""/></div>
                <div class="sponsor-content"><h2>Jetdino</h2>
                <p>
                    <a href="https://jetdino.com">Jetdino</a> is sponsoring us with custom POP location in Indonesia.
                </p></div><div class="clearfix"></div></div>
             </div>
           </div><!-- row ends -->

           <div class="row first well">
                <div class="seperator"><div class="lebrag"><h3>Media Mentions and Links</h3></div></div>
                <blockquote>
                    <a href="http://royal.pingdom.com/2013/05/22/web-dev-projects/">Interview with driving forces behind web dev projects jsDelivr & jSter</a><small><cite title="Source Title">Pingdom Interview</cite></small>
                </blockquote>
                <blockquote>
                    <a href="http://fluentconf.com/fluent2013/public/content/media-partners">Official media sponsor of Fluent 2013 Conference</a><small><cite title="Source Title">O'Reilly Fluent Conference</cite></small>
                </blockquote>
                <blockquote>
                    <a href="http://wpmu.org/speed-up-wordpress-with-the-free-jsdeliver-cdn/">Speed Up WordPress With the Free jsDelivr CDN</a><small><cite title="Source Title">wpmu.org</cite></small>
                </blockquote>
                <blockquote>
                    <a href="http://wordpress.org/extend/plugins/wp-slimstat/">Integrated by WP SlimStat</a><small><cite title="Source Title">wordpress.org</cite></small>
                </blockquote>
                <blockquote>
                    <a href="http://www.cdn-advisor.com/jsdelivr-provides-free-cdn-solution-for-hosting-common-applications/">jsDelivr Provides Free CDN Solution for Hosting Common Applications</a><small><cite title="Source Title">cdn-advisor.com</cite></small>
                </blockquote>
                <blockquote>
                    <a href="http://www.dezignmatterz.com/best-wordpress-plugins-2012/">Latest WordPress Plugins To Jump Start Your Website</a><small><cite title="Source Title">dezignmatterz.com</cite></small>
                </blockquote>
                <blockquote>
                    <a href="http://www.iblogzone.com/2013/01/make-your-wordpress-site-load-faster-2013.html">How To Make Your WordPress Site Load Faster in 2013</a><small><cite title="Source Title">iblogzone.com</cite></small>
                </blockquote>
                <blockquote>
                    <a href="http://www.wpsquare.com/wordpress-plugins-improve-loading-speed/">10 Handy WordPress Plugins to Improve Page Loading Speed</a><small><cite title="Source Title">wpsquare.com</cite></small>
                </blockquote>
                <blockquote>
                    <a href="http://tech.graphicline.co.za/jsdelivr-wordpress-cdn-plugin-review/">jsDelivr WordPress CDN Plugin</a><small><cite title="Source Title">tech.graphicline.co.za</cite></small>
                </blockquote>
                <blockquote>
                    <a href="http://www.functionn.in/2012/06/jsdelivr-free-cdn-for-javascript-and.html">jsDelivr - A Free CDN For JavaScript And jQuery Plugins</a><small><cite title="Source Title">functionn.in</cite></small>
                </blockquote>
                <blockquote>
                    <a href="http://wpmu.org/14-cdn-providers-to-make-wordpress-blazing-fast/">14 CDN Providers to Make WordPress Blazing Fast</a><small><cite title="Source Title">wpmu.org</cite></small>
                </blockquote>
                <blockquote>
                    <a href="http://wpmu.org/10-plugins-to-make-wordpress-blazing-fast/">10 Plugins to Make WordPress Blazing Fast</a><small><cite title="Source Title">wpmu.org</cite></small>
                </blockquote>
                <blockquote>
                    <a href="http://wplift.com/wordpress-cdn-services">The Complete Guide to Free & Paid WordPress CDN Services</a><small><cite title="Source Title">wplift.com</cite></small>
                </blockquote>
                <blockquote>
                    <a href="http://mvkoen.com/cdn-gratuito-de-jsdelivr-para-wordpress/">Acelera tu sitio web con CDN gratuito de jsDelivr para WordPress (Spanish)</a><small><cite title="Source Title">mvkoen.com</cite></small>
                </blockquote>
                <blockquote>
                    <a href="http://habrahabr.ru/post/168329/">Обзор бесплатного CDN-хостинга JS библиотек jsDelivr (Russian)</a><small><cite title="Source Title">habrahabr.ru</cite></small>
                </blockquote>
                <br>
                <p>
                    <a href="http://trends.builtwith.com/cdn/jsDelivr">builtwith.com</a>
                </p>
                <p>
                    <a href="http://w3techs.com/technologies/details/cd-jsdelivr/all/all">w3techs.com</a>
                </p>
            </div> <!-- span11 -->
        </div> <!-- row first well -->


<?php include('footer.php'); ?>