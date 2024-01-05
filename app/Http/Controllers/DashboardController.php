<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class DashboardController extends Controller
{
    public function dashboard(Request $request){
        $user = $request->user()->first_name;
        return view('dashboard', compact('user'));
    }
    public function blog(Request $request){
        $user = $request->user()->first_name;
        return view('blog', compact('user'));
    }
    public function package(Request $request){
        $user = $request->user()->first_name;
        $packages = \App\Models\Package::all();
        return view('components.package', compact('user', 'packages'));
    }
    public function checkout(Request $request){
        $user = $request->user()->first_name;
        return view('components.checkout', compact('user'));
    }
}
