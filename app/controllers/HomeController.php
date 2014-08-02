<?php

class HomeController extends BaseController {

    private $post;
    private $project;

    /**
     * Instantiate a new HomeController instance.
     */
    public function __construct(
        PostRepositoryInterface $post,
        ProjectRepositoryInterface $project
    )
    {
        parent::__construct();

        $this->post = $post;
        $this->project = $project;
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
        $this->addViewProperty('recentProjects', $this->project->recent(3));

		return $this->getView('home');
	}

}
