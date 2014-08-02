@extends('projects.layout')

@section('innerContent')
    <div class="container">
        <div class="row">
            <div class="projects-container col-sm-8 col-sm-offset-2">
                @foreach ($projects as $project)
                    <div class="project">
                        <h3><a href="/{{ $project->slug }}">{{ $project->title }}</a></h3>
                        <p class="date">{{ (new Date($project->created_at))->ago(); }}</p>
                        <hr>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 action-buttons">
                <button class="more-projects btn" data-project-count="{{ count($projects); }}" type="button">Next Projects</button>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script src="/js/jquery.timeago.js"></script>
    <script src="/js/main.js"></script>
@stop