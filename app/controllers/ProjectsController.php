<?php

class ProjectsController extends \BaseController {

    private $project;

    /**
     * Instantiate a new ProjectsController instance.
     */
    public function __construct(
        ProjectRepositoryInterface $project
    )
    {
        parent::__construct();

        $this->project = $project;
        $this->addPageClass('projects');
    }

	/**
	 * Display a listing of projects
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->addPageClass('index');

		$this->addViewProperty('projects', $this->project->recent(5));
		$this->addViewMeta('Hayden Lee\'s Projects', 'Hayden Lee\'s developer projects');

		return $this->getView('projects.index');
	}

	/**
	 * Display the specified project.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		$this->addPageClass('show');

		$project = $this->project->getBySlug($slug);

		$this->addViewProperty('project', $project);
		$this->addViewProperty('created_at', $project->created_at);
		$this->addViewProperty('updated_at', $project->updated_at);
		$this->addViewMeta('Hayden Lee - Projects - ' . $project->title, $project->tagline);

		return $this->getView('projects.show');
	}

	/**
	 * Display the projects in the specified range by date created.
	 *
	 * @return Response
	 */
	public function range()
	{
		return $this->project->range(intval(Input::get('lowLimit')), 5);
	}

		/**
	 * Show the form for creating a new project
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('projects.create');
	}

	/**
	 * Store a newly created project in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Project::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Project::create($data);

		return Redirect::route('projects.index');
	}

	/**
	 * Show the form for editing the specified project.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$project = Project::find($id);

		return View::make('projects.edit', compact('project'));
	}

	/**
	 * Update the specified project in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$project = Project::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Project::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$project->update($data);

		return Redirect::route('projects.index');
	}

	/**
	 * Remove the specified project from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Project::destroy($id);

		return Redirect::route('projects.index');
	}

}
