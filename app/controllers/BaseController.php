<?php

class BaseController extends Controller {

	private $viewBag;

	/**
	 * Get information for page elements on every page
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->viewBag = array(
			'title'		  => 'Hayden Lee - Blog and Developer Projects',
			'description' => 'Hayden Lee\'s personal website, blog, and developer projects',
	    	'pageClass'   => ''
	    );
	}

	/*
	|--------------------------------------------------------------------------
	| Adds a class name to the pageClass key in the data object
	|--------------------------------------------------------------------------
	*/
	protected function addPageClass( $class )
	{
		$this->viewBag['pageClass'] .= ' ' . $class;
	}

	/*
	|--------------------------------------------------------------------------
	| Creates a new key and value in the data object
	|--------------------------------------------------------------------------
	*/
	protected function addViewProperty( $key, $value )
	{
		$this->viewBag[$key.""] = $value;
	}

	/*
	|--------------------------------------------------------------------------
	| Adds the meta data to the view bag
	|--------------------------------------------------------------------------
	*/
	protected function addViewMeta( $title, $description )
	{
		$this->viewBag['title'] = $title;
		$this->viewBag['description'] = $description;
	}

	/*
	|--------------------------------------------------------------------------
	| Return this View, with location data if needed
	|--------------------------------------------------------------------------
	*/
	protected function getView($view)
	{
		return View::make($view, $this->viewBag);
	}
}
