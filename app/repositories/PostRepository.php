<?php

class PostRepository implements PostRepositoryInterface {

    public function all()
    {
        return Post::orderBy('created_at', 'DESC')->get();
    }

    public function getBySlug($slug)
    {
        return Post::where('slug', $slug)->first();
    }

    public function recent($num)
    {
        return Post::orderBy('created_at', 'DESC')->take($num)->get();
    }

    public function range($skip, $take) {
        return Post::orderBy('created_at', 'DESC')->skip($skip)->take($take)->get();
    }
}