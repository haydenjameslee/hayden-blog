@extends('posts.layout')

@section('innerContent')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="post">
                    <h1 class=""><a href="/{{ $post->slug }}">{{ $post->title }}</a></h1>
                    <p class="date">{{ (new Date($post->created_at))->ago(); }}</p>
                    <div class="post-body">{{ $post->body }}</div>
                    <div class="comments">
                        <a href="http://twitter.com/home?status=http://hayden.io/{{ $post->slug }} @haydenjameslee">Leave a comment</a>
                        // <a href="http://twitter.com/search?f=realtime&q=hayden.io">View comments</a>
                        // <span class="date">{{ (new Date($post->created_at))->format('Y-m-d'); }}</span>
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
@stop