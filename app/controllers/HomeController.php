<?php

class HomeController extends BaseController {


    /**
     * Instantiate a new AboutUsController instance.
     */
    public function __construct(PostRepositoryInterface $post)
    {
        parent::__construct();

        $this->post = $post;
        $this->addPageClass('home');
    }

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	*/

	public function home()
	{
        $this->addViewProperty('recentPosts', $this->post->recent(3));

		return $this->getView('home');
	}

}
