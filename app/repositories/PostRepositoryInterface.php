<?php

interface PostRepositoryInterface {

    public function all();

    public function getBySlug($slug);

    public function recent($num);

    public function range($skip, $take);
}