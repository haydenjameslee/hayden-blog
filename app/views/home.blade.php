@extends('master')

@section('content')
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/#about">Hayden<strong>Lee</strong></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/#about">About</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/portfolio">Projects</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <header id="header">
        <div class="container"></div>
    </header>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>I Solve Problems</h2>
                    <!-- <hr class="star-light"> -->
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>For the last three years I've been creating software solutions for startups and small businesses. Currently I'm building virtual reality products to solve real-world problems.</p>
                </div>
                <div class="col-lg-4">
                    <p>My life goal is to create something that people can't imagine living without.<br>If you'd like to get in touch contact me at <a class="insert-email" href="#"></a></p>
                </div>
            </div>
        </div>
    </section>

    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><a href="/blog">Recent Posts</a></h2>
                    <br>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    @foreach ($recentPosts as $post)
                        <p class="post-title"><a href="/{{ $post->slug }}">{{ $post->title }} </a></p>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <br><br>
                    <a href="/blog" class="btn btn-lg btn-outline">
                        <!-- <i class="fa fa-list"></i> --> View All Posts
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Projects</h2>
                    <!-- <hr class="star-light"> -->
                    <br>
                </div>
            </div>
            <div class="row">

            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <br><br>
                    <a href="/portfolio" class="btn btn-lg btn-outline">
                        <!-- <i class="fa fa-list"></i> --> View All Projects
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Featured On</h3>
                        <p>3481 Melrose Place
                            <br>Beverly Hills, CA 90210</p>
                    </div>
                    <div class="footer-col col-md-4 social-media-container">
                        <h3>Social Medias</h3>
                        <ul class="list-inline">
                            <li><a href="http://www.facebook.com/hayden337" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li><a href="http://plus.google.com/115827124178955569056" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li><a href="https://twitter.com/haydenjameslee" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li><a href="http://www.linkedin.com/in/haydenjameslee/" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <!-- <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>What I'm Reading</h3>
                        <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright © 2014 - Hayden Lee
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
@stop





@section('scripts')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="/js/classie.js"></script>
    <script src="/js/cbpAnimatedHeader.js"></script>
    <script src="/js/skrollr.js"></script>
    <script src="/js/skrollr.menu.min.js"></script>
    <script src="/js/main.js"></script>
@stop