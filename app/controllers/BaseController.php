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
			'title'		  => 'Hayden Lee - Blog and Portfolio',
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
	| Return this View, with location data if needed
	|--------------------------------------------------------------------------
	*/
	protected function getView($view)
	{
		return View::make($view, $this->viewBag);
	}
}
