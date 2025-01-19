<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        {
            $title = 'Karya Midas Mandiri';
            return view('backoffice.dashboard', compact('title'));
        }
    }
}
