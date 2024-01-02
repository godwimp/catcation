<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class IndexController extends Controller
{
    public function index(){
        $dataPackage = Package::all();
        return view('index', ['packages' => $dataPackage]);
    }
}
