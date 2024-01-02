<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(Request $request){
        $user = $request->session()->get('first_name');
        $firstName = $user ? $user : 'Guest';
        return view('dashboard', ['namaUser' => $firstName]);
    }
}
