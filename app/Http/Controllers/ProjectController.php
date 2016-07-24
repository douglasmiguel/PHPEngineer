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
        $projects = Project::info()->get();
        return view('project.index', ['projects'=>$projects, ]);
    }

    public function show($projectId)
    {
        return view('project.show', []);
    }

}
