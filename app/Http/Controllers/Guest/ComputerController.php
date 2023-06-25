<?php

namespace App\Http\Controllers\Guest;

use App\Models\Computer;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComputerRequest;
use App\Http\Requests\UpdateComputerRequest;
use GuzzleHttp\Psr7\Request;

class ComputerController extends Controller{
    public function index(){
        #$computers = Computer::all();
        $computers = collect(Computer::orderBy('id','desc')->take(5)->get());
        return view('guest.index', compact('computers'));
    }

    public function show(Computer $computer){
        return view('guest.show', compact('computer'));
    }
}
