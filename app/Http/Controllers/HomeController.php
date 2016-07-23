<?php

namespace PHPEngineer\Http\Controllers;

use PHPEngineer\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home.index');
    }

    public function menu(Request $request)
    {
        $this->middleware('ajax');
        try {
            $menuCollapsed = (boolean)( $request->input('menu_collapsed')==='true' ) ? true : false;
            $request->session()->put('menu_collapsed', $menuCollapsed);
        } catch(Exception $e) {
            return response()->json(false, 404, [], JSON_NUMERIC_CHECK);
        }
        return response()->json($request->session()->all(), 200, [], JSON_NUMERIC_CHECK);
    }

}
