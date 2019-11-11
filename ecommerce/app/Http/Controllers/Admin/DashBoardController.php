<?php

namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)

    {  if(!$request->user()->hasRole(['admin']))
        {
            return abort(401,"This action is not allowed");
        }
        return view('Admin.dashboard.index');
    }
}
