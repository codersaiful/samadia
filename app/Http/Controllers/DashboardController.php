<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        
        if( Auth::user()->hasRole('admin') ){
            return view('dashboard.admin');
        }elseif( Auth::user()->hasRole('manager') ){
            return view('dashboard.manager');
        }elseif(  Auth::user()->hasRole('salesman') ){
            return view('dashboard.salesman');
        }
    }
}
