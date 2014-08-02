<html lang="en"><head>

    <!-- Update your html tag to include the itemscope and itemtype attributes. -->
    <html itemscope itemtype="http://schema.org/Article">

    <!-- Place this data between the <head> tags of your website -->
    <title>Page Title. Maximum length 60-70 characters</title>
    <meta name="description" content="Page description. No longer than 155 characters." />

    <!-- Google Authorship and Publisher Markup -->
    <link rel="author" href="https://plus.google.com/+HaydenLee337/posts"/>
    <link rel="publisher" href="https://plus.google.com/+HaydenLee337"/>

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ $title }}">
    <meta itemprop="description" content="{{ $description }}">
    <meta itemprop="image" content="http://haydenlee.io/img/haydenlee-black3.png">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@haydenjameslee">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $description }}">
    <meta name="twitter:creator" content="@haydenjameslee">
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image:src" content="http://haydenlee.io/img/haydenlee-black3.png">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ $title }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ $url }}" />
    <meta property="og:image" content="http://haydenlee.io/img/haydenlee-black3.png" />
    <meta property="og:description" content="{{ $description }}" />
    <meta property="og:site_name" content="Hayden Lee" />
    <meta property="article:published_time" content="{{ $created_at }}" />
    <meta property="article:modified_time" content="{{ $updated_at }}" />
    <meta property="article:section" content="Blog" />
    <meta property="article:tag" content="coding, startups" />
    <meta property="article:author" content="https://www.facebook.com/hayden337" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="{{ $description }}">
    <meta name="author" content="Hayden Lee">

    <title>{{ $title }}</title>

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

</head>
<body class="{{ $pageClass }}">

    @yield('content')

    <script src="/js/jquery-1.10.2.js"></script>
    <script src="/js/bootstrap.js"></script>
    @yield('scripts')

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-53457002-1', 'auto');
        ga('send', 'pageview');
    </script>

</body></html>