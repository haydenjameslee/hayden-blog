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
                    <li class="hidden-xs"><a href="/#about">About</a></li>
                    <li class="visible-xs-block hidden-sm hidden-md hidden-lg" ><a href="/">About</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/projects">Projects</a></li>
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
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    @foreach ($recentPosts as $post)
                        <p class="post-title"><a href="/{{ $post->slug }}">{{ $post->title }} </a></p>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="/blog" class="btn btn-lg btn-outline">
                        View All Posts
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><a href="/projects">Recent Projects</a></h2>
                </div>
            </div>
            <div class="row">
                @foreach ($recentProjects as $project)
                    <div class="col-sm-4">
                        <a href="/projects/{{ $project->slug }}" class="project-img-container">
                            <img src="{{ $project->mediaUrl == '' ? '/img/default.png' : $project->mediaUrl }}" class="project-media" />
                        </a>
                        <h3><a href="/projects/{{ $project->slug }}">{{ $project->title }}</a></h3>
                        <p>{{ $project->tagline }}</p>
                        <a class="view-project" href="/projects/{{ $project->slug }}">View Project</a>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <a href="/projects" class="btn btn-lg btn-outline">
                        View All Projects
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                <div class="reading footer-col col-md-4">
                        <h3>What I'm Reading</h3>
                        <p><a title="the new digital age" href="http://www.amazon.com/The-New-Digital-Age-Reshaping/dp/0307957136">The New Digital Age<br><i>~Schmidt & Cohen</i></a></p>
                    </div>
                    <div class="featured footer-col col-md-4">
                        <h3>Featured On</h3>
                        <p>
                            <a title="hayden lee yo hackathon" href="http://techcrunch.com/2014/06/28/yo-hackathon-attempts-to-show-how-yo-can-grow/"><img alt="techcrunch logo" src="/img/tc-logo.jpg" /></a>
                            <a title="hayden lee udacity" href="http://blog.udacity.com/2013/01/udacity-student-success-story-hayden-lee.html"><img alt="udacity logo" src="/img/udacity-logo.png" /></a>
                            <a title="hayden lee roanoke times" href="http://www.roanoke.com/news/local/blacksburg/top-colleges-free-on-the-web/article_fb302277-f096-5803-b4fd-e566c4bb8255.html?mode=story"><img alt="roanoke times logo" src="/img/RoanokeTimes.png" /></a>
                        </p>
                    </div>
                    <div class="footer-col col-md-4 social-media-container">
                        <h3><a title="hayden lee twitter" href="https://twitter.com/haydenjameslee" style="color:white;">Stay in touch</a></h3>
                        <a href="https://twitter.com/haydenjameslee" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
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
@stop

@section('scripts')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="/js/classie.js"></script>
    <script src="/js/cbpAnimatedHeader.js"></script>
    <script src="/js/skrollr.js"></script>
    <script src="/js/skrollr.menu.min.js"></script>
    <script src="/js/main.js"></script>
@stop