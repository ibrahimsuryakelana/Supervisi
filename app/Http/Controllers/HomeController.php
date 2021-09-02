<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
        if(Auth::user()->role == "ADMIN"){
            return view('home');
        }elseif (Auth::user()->role == "SUPERVISOR"){
            return redirect('/supervisor');
        }elseif (Auth::user()->role == "GURU"){
            return redirect('/guru');
        }elseif (Auth::user()->role == "KURIKULUM"){
            return redirect('/kurikulum');
        }elseif (Auth::user()->role == "KEPSEK"){
            return redirect('/kepsek');
        };
    }
    
}
