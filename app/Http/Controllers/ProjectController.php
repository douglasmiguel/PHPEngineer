<?php

namespace PHPEngineer\Http\Controllers;

use PHPEngineer\Http\Requests;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }

    public function index()
    {
        return view('project.index', []);
    }

    public function show($projectId)
    {
        return view('project.show', []);
    }

}
