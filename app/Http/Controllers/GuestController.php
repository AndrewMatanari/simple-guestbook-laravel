<?php

namespace App\Http\Controllers;

use App\Models\guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(){
        $guests = Guest::all();
        return view('index', compact('guests'));
    }

    public function form(){
        return view('form');
    }

    public function store( request $request){
        $request->validate([
            'name' => 'required',
            'message'=>'required'
        ]);
        Guest::create($request->all());
        return redirect('/');
    }
}
