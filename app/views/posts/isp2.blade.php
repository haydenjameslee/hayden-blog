<html lang="en">
    <head>

    <!-- Google Authorship and Publisher Markup -->
    <link rel="author" href="https://plus.google.com/+HaydenLee337/posts">
    <link rel="publisher" href="https://plus.google.com/+HaydenLee337">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Hayden Lee - Blog - Word for word from my ISP admitting to using a man in the middle attack to place ads in websites">
    <meta itemprop="description" content="Word for word from my ISP admitting to using a man in the middle attack to place ads in websites">
    <meta itemprop="image" content="http://haydenlee.io/img/haydenlee-black3.png">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@haydenjameslee">
    <meta name="twitter:title" content="Hayden Lee - Blog - Word for word from my ISP admitting to using a man in the middle attack to place ads in websites">
    <meta name="twitter:description" content="Word for word from my ISP admitting to using a man in the middle attack to place ads in websites">
    <meta name="twitter:creator" content="@haydenjameslee">
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image:src" content="http://haydenlee.io/img/haydenlee-black3.png">

    <!-- Open Graph data -->
    <meta property="og:title" content="Hayden Lee - Blog - Word for word from my ISP admitting to using a man in the middle attack to place ads in websites">
    <meta property="og:type" content="article">
    <meta property="og:url" content="http://haydenlee.io/my-isp-access-media-3-admitting-to-man-in-the-middle-attack">
    <meta property="og:image" content="http://haydenlee.io/img/haydenlee-black3.png">
    <meta property="og:description" content="Word for word from my ISP admitting to using a man in the middle attack to place ads in websites">
    <meta property="og:site_name" content="Hayden Lee">
    <meta property="article:published_time" content="2014-09-10 00:00:00">
    <meta property="article:modified_time" content="2014-09-10 00:00:00">
    <meta property="article:section" content="Blog">
    <meta property="article:tag" content="coding, startups">
    <meta property="article:author" content="https://www.facebook.com/hayden337">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="Word for word from my ISP admitting to using a man in the middle attack to place ads in websites">
    <meta name="author" content="Hayden Lee">

    <title>Hayden Lee - Blog - Word for word from my ISP admitting to using a man in the middle attack to place ads in websites</title>

    <!-- Bootstrap Core CSS -->
    <link href="/styles/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/styles/main.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">-->

    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="//widget.battleforthenet.com/widget.min.js" async=""></script>
<style type="text/css"></style></head>
<body class=" blog show">

        <nav class="navbar navbar-default child-page-navbar" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="https://www.battleforthenet.com/" target="_blank"><img alt="hayden lee logo" src="/img/slow-down.gif"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/#about">About</a></li>
                    <li class="active"><a href="/blog">Blog</a></li>
                    <li><a href="/projects">Projects</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

        <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="post">
                    <h1 class=""><a href="/my-isp-access-media-3-admitting-to-man-in-the-middle-attack">Word for word from my ISP admitting to using a man in the middle attack to place ads in websites</a></h1>
                    <p class="date">19 hours ago</p>
                    <div class="post-body"><p>After I posted <a href="https://www.reddit.com/r/technology/comments/1ugou3/evidence_my_isp_is_making_money_from_tracking_its/" title="isp tracking reddit post" target="_blank">this blog post</a> to /r/technology earlier this year (and 70,000 views later) my ISP finally replied and confirmed what I had accused them of. Below is an email from Access Media 3 admitting to using my web browsing data to show ads on websites:</p>

<blockquote><p>Many of you have approached me about the pop up residents see when online. I do want to let you know this is an advertising tool. Access Media 3 does not track users’ web activity, collect personally identifiable information, nor sell users’ personal information. Aggregate browsing information may be used to deliver an advertisement that is more tailored to our users’ perceived interests. The application should have no impact on the user experience. Upon further investigation we found that the system was slightly impacting browsing by creating a very small ribbon at the top of the browser.  We are working with our developers to identify and correct the case.</p>

<p>If you need to share this with your residents please feel free but just wanted you to have the information incase you are asked! Thank you and have a great week!</p></blockquote>

<p>Screenshot: <a href="http://imgur.com/sYogfFv" title="access media 3" target="_blank" class="hoverZoomLink">http://imgur.com/sYogfFv</a></p>

<p>The only way they could place "an advertisement that is more tailored" on websites across their network is by conducting a <a href="http://en.wikipedia.org/wiki/Man-in-the-middle_attack" title="man in the middle wikipedia" target="_blank">man in the middle attack</a>. I confirmed this at the time by noticing that encrypted sites (using https) were not affected.</p>

<p>Yet another <a href="http://www.neontommy.com/sites/default/files/comcast-time-warner-cable-company-south-park-meme.jpg?1393369148" title="good guy isp meme" target="_blank" class="hoverZoomLink">good guy ISP</a>.</p></div>
                    <div class="comments">
                        <a href="http://twitter.com/home?status=http://hayden.io/my-isp-access-media-3-admitting-to-man-in-the-middle-attack @haydenjameslee" target="_blank">Leave a comment</a>
                        // <a href="http://twitter.com/search?f=realtime&amp;q=haydenlee.io">View comments</a>
                        // <span class="date">2014-09-10</span>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 action-buttons">
                <a href="/blog" class="btn btn-default">Back To All Posts</a>
            </div>
        </div>
    </div>

    <script src="/js/jquery-1.10.2.js"></script>
    <script src="/js/bootstrap.js"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-53457002-1', 'auto');
        ga('send', 'pageview');
    </script>

</body></html>