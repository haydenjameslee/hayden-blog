<?php

class ProjectRepository implements ProjectRepositoryInterface {

    public function all()
    {
        return Project::orderBy('created_at', 'DESC')->get();
    }

    public function getBySlug($slug)
    {
        return Project::where('slug', $slug)->first();
    }

    public function recent($num)
    {
        return Project::orderBy('created_at', 'DESC')->take($num)->get();
    }

    public function range($skip, $take) {
        return Project::orderBy('created_at', 'DESC')->skip($skip)->take($take)->get();
    }
}