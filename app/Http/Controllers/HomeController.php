<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;


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
        if(Auth::user()->hasRole('Admin')){
        return view('home');
        }elseif(Auth::user()->hasRole('Agent')){
            return view('admin.dashboards.agent');
        }elseif(Auth::user()->hasRole('Customer')){
            return view('admin.dashboards.customer');
        }
    }
}
