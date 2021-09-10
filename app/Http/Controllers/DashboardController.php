<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        
        if (Auth::user()->hasRole('penjual')) {
               return view('dashboard');
           }elseif(Auth::user()->hasRole('user')){
               return view('home');
           }
    }
}
