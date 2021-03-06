<?php include('header.php'); ?>

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
            <h2>Frequently Asked Questions</h2>
        </div><!-- container ends -->
    </div>


    <div class="container content"><!-- actual container for content starts -->
        <div class="row">
            <div class="span12">
                <h2>How can jsDelivr be free? How can it survive in the long term?</h2>
                <p>
                    CDN traffic is expensive, yes. But all of our traffic and services are sponsored by awesome companies
                    that want to make the web a faster and better place. Check out the footer for credits.
                    It means that it doesn't matter how much traffic a plugin or project can generate, there is nothing to worry about.
                </p>
                <h2>Are there any bandwidth limits?</h2>
                <p>
                    No and there will never be.
                </p>
                <h2>Does MaxCDN own jsDelivr?</h2>
                <p>
                    No, MaxCDN is one of our biggest sponsors but they don't own or influence the project in any way. Neither does any other company.
                </p>
                <h2>Why my tests of jsDelivr show bad performance?</h2>
                <p>
                    jsDelivr relies on RUM tests made by real users. Based on this data it can intelligently select the best provider for each user.
                    Unfortunately this also means that any synthetic test of jsDelivr that runs on servers will result in worse performance.
                    Services like Pingdom and WebPageTest or any other server based testing will not be able to take the full advantage of our intelligent load balancing.
                    All servers fallback to country level performance data and not ASN based like real users do.
                </p>
                
                <h2>Why are some projects tagged as version 0.1?</h2>
                <p>
                    Some times it's hard to find what version is a project because the developer doesn't mention it anywhere.
                    In these cases we just use 0.1 as the starting version and increase it on next updates.
                </p>

                <h2>Some projects have wrong Github links</h2>
                <p>
                    Yes, unfortunately in the version of jsDelivr all projects only had a homepage link.
                    In the new version we decided to add a github link too. So all the files added before the update
                    don't have a github link. Its something that is going to be fixed in time.
                </p>

                <h2>Can I use HTTPS to load files from your CDN?</h2>
                <p>
                    Yes, we have a valid SSL certificate. All cdn.jsdelivr.net traffic can be served via HTTPS without any problems.
                </p>

                <h2>How are you making money?</h2>
                <p>
                    I don't, the project is a non-profit. Most of the stuff is sponsored by companies and rest is paid by me.
                </p>

                <h2>How can I help?</h2>
                <p>
                    If you are a company you could consider donating your services or products.
                    You could also help us with promoting our product, integrating jsDelivr into your own solutions,
                    donating money, giving advice, ideas, human resources... As a non-profit we will appreciate anything at all.
                    The same goes for individuals, you can always donate money or even help with the development/design.
                    Write blog posts or submit new ideas and features. Just send us an email.
                </p>

                <h2>Who is behind jsDelivr?</h2>
                <p>
                    Basically just me, Dmitriy A. or <a href="https://twitter.com/jimaek">@jimaek</a>.
                    But a lot of other people are involved, giving their advice and helping me out.
                    I always refer to jsDelivr in the plural sense because of this.
                </p>

                <h2>Your grammar sucks.</h2>
                <p>
                    English is not my native language. I try to proof-read all of my content but it's hard.
                    Send me an email if you find any mistakes or want to help me with the content.
                </p>

                <h2>Your coding/design sucks.</h2>
                <p>
                    Maybe, I work as a system administrator and I never actually studied programming or web design.
                    Its just a hobby of mine, everything I know comes from different sources and online tutorials.
                    The important thing is that it all works! :)
                </p>
            </div> <!-- span12 -->
        </div> <!-- row single -->
    </div> <!-- /container -->

<?php include('footer.php'); ?>
