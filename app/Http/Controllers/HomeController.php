<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->admin){
            return redirect()->route('admin.home')->with('message','Welcome ADMIN, ' . auth()->user()->firstname . ' ' . auth()->user()->familyname);
        }else{
            return redirect()->route('web.home')->with('message','Welcome, ' . auth()->user()->firstname . ' ' . auth()->user()->familyname);
        }


    }


}
