<?php

namespace PHPEngineer\Http\Controllers;

use PHPEngineer\Http\Requests;
use Illuminate\Http\Request;
use PHPEngineer\Models\Project;

class ProjectController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }

    public function index()
    {
        $projects = Project::all();
        return view('project.index', ['projects'=>$projects, ]);
    }

    public function show($slug)
    {
        $project = Project::info()->where('slug', $slug)->first();
        if(empty($project)) {
            abort(404);
        }
        return view('project.show', ['project'=>$project]);
    }

}
