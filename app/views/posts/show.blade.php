@extends('posts.layout')

@section('innerContent')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="post">
                    <h3 class=""><a href="/{{ $post->slug }}">{{ $post->title }}</a></h3>
                    <p class="date">{{ (new Date($post->created_at))->ago(); }}</p>
                    <p>{{ $post->body }}</p>
                    <a href="http://twitter.com/home?status=http://hayden.io/blog/{{ $post->slug }} @haydenjameslee">Leave a comment</a>
                    // <a href="http://twitter.com/search?q=hayden.io/{{ $post->slug }}">View comments</a>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 action-buttons">
                <a href="/blog" class="btn btn-default">Back To All Posts</a>
            </div>
        </div>
    </div>
@stop