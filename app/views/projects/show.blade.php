@extends('projects.layout')

@section('innerContent')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="project">

                    <div class="row">
                        <div class="col-sm-4">
                            <a title="{{ $project->title }}" href="{{ $project->url }}">
                                <img src="{{ $project->mediaUrl == '' ? '/img/default.png' : $project->mediaUrl }}" class="project-media" />
                            </a>
                        </div>
                        <div class="col-sm-8">
                            <h1 class=""><a href="{{ $project->url }}">{{ $project->title }}</a></h1>
                            <p class="date">{{ (new Date($project->created_at))->ago(); }}</p>
                            <div class="project-body">{{ $project->description }}</div>
                            <p><a class="btn btn-primary" title="{{ $project->title }}" href="{{ $project->url }}">View Project</a></p>
                            <div class="comments">
                                <a href="http://twitter.com/home?status=http://hayden.io/blog/{{ $project->slug }} @haydenjameslee">Leave a comment</a>
                                // <a href="http://twitter.com/search?q=hayden.io/{{ $project->slug }}">View comments</a>
                                // <span class="date">{{ (new Date($project->created_at))->format('Y-m-d'); }}</span>
                            </div>
                        </div>
                    </div>

                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 action-buttons">
                <a href="/projects" class="btn btn-default">Back To All Projects</a>
            </div>
        </div>
    </div>
@stop