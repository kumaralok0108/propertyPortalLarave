<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        //return view('/frontend/user-dashboard');
        if(auth()->user()->type==1){
            return view('admin/admin-dashbord');
            
        } elseif(auth()->user()->type==2){
            return view('/frontend/user-dashboard');
        } else {

            return view('/');
        }
    }

        // public function property()
        // {
        //     return view('/frontend/user-dashboard');
        // }

    public function logout()
    {
       
        return redirect('/')->with(Auth::logout());
    }
}
