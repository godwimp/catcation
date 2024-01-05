<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class DashboardController extends Controller
{
    public function dashboard(Request $request){
        $packages = \App\Models\Package::all();
        $user = $request->user()->first_name;
        return view('dashboard', compact('user', 'packages'));
    }
    public function index(Request $request){
        $packages = \App\Models\Package::all();
        if (auth()->check()) {
            $user = $request->user()->first_name;
            return view('index', compact('user', 'packages'));
        } else {
            return view('index', compact('packages'));
        }
    }
    public function blog(Request $request){
        if (auth()->check()) {
            $user = $request->user()->first_name;
            return view('blog', compact('user'));
        } else {
            return view('blog');
        }
    }
    public function package(Request $request, $id){
        $user = $request->user()->first_name;
        $selectedPackage = \App\Models\Package::find($id);
        $packages = \App\Models\Package::all();
        return view('components.package', compact('user', 'packages', 'selectedPackage'));
    }
    public function checkout(Request $request, $id){
        $user = $request->user()->first_name;
        $selectedPackage = \App\Models\Package::find($id);
        $packages = \App\Models\Package::all();
        return view('components.checkout', compact('user', 'packages', 'selectedPackage'));
    }
}
