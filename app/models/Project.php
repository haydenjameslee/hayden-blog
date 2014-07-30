<?php

class Project extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = array( 'title', 'slug', 'description', 'tagline', 'url', 'mediaUrl', 'isVideo' );

}