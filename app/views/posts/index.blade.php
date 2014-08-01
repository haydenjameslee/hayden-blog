@extends('posts.layout')

@section('innerContent')
    <div class="container">
        <div class="row">
            <div class="posts-container col-sm-8 col-sm-offset-2">
                @foreach ($posts as $post)
                    <div class="post">
                        <h3><a href="/{{ $post->slug }}">{{ $post->title }}</a></h3>
                        <p class="date">{{ (new Date($post->created_at))->ago(); }}</p>
                        <p>{{ $post->body }}</p>
                        <a href="http://twitter.com/home?status=http://hayden.io/blog/{{ $post->slug }} @haydenjameslee">Leave a comment</a>
                        // <a href="http://twitter.com/search?q=hayden.io/{{ $post->slug }}">View comments</a>
                        <hr>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 action-buttons">
                <button class="more-posts btn" data-post-count="{{ count($posts); }}" type="button">Next Posts</button>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script src="/js/jquery.timeago.js"></script>
    <script src="/js/main.js"></script>
@stop