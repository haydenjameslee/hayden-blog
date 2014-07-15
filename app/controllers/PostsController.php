<?php

class PostsController extends \BaseController {

	public function __construct(PostRepositoryInterface $post)
  	{
    	parent::__construct();

	    $this->post = $post;
	    $this->addPageClass('blog');
  	}

	/**
	 * Display a listing of posts
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->addPageClass('index');

		$this->addViewProperty('posts', $this->post->recent(5));

		return $this->getView('posts.index');
	}

	/**
	 * Display the specified post.
	 *
	 * @param  string  $slug
	 * @return Response
	 */
	public function show($slug)
	{
		$this->addPageClass('show');

		$this->addViewProperty('post', $this->post->getBySlug($slug));

		return $this->getView('posts.show');
	}

	/**
	 * Display the posts in the specified range by date created.
	 *
	 * @return Response
	 */
	public function range()
	{
		return $this->post->range(intval(Input::get('lowLimit')), 5);
	}


	/**
	 * Show the form for creating a new post
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}

	/**
	 * Store a newly created post in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Post::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Post::create($data);

		return Redirect::route('posts.index');
	}

	/**
	 * Show the form for editing the specified post.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);

		return View::make('posts.edit', compact('post'));
	}

	/**
	 * Update the specified post in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Post::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$post->update($data);

		return Redirect::route('posts.index');
	}

	/**
	 * Remove the specified post from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Post::destroy($id);

		return Redirect::route('posts.index');
	}

}
