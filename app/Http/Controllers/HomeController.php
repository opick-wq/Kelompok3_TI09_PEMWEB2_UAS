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
        if (auth()->user()->role == 'manager' || auth()->user()->role == 'admin') {
            return redirect('frontend/homefrontend');
        } else if (auth()->user()->role == 'pelanggan') {
            return redirect('frontend/homefrontend');
        } else {
            return redirect('/login');
        }
        
    }
}
