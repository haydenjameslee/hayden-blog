<?php

class PostRepository implements PostRepositoryInterface {

    public function mostRecent()
    {
        return Post::orderBy('created_at', 'DESC')->first();
    }
}