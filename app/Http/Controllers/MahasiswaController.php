<?php

namespace App\Http\Controllers;

Use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class MahasiswaController extends Controller
{
    public function show(Request $request){
        $request -> session() -> put('name', $request -> input('name'));
        return view('tampil') -> with('name', $request -> session() -> get('name'));
    }
}
