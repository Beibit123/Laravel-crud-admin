<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComputerRequest;
use App\Http\Requests\UpdateComputerRequest;
use App\Models\Computer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComputerController extends Controller{
    public function index(){
        #$computers = Computer::all();
        $computers = collect(Computer::orderBy('id','desc')->take(5)->get());
        return view('computer.index', compact('computers'));
    }

    public function show(Computer $computer){
        return view('computer.show', compact('computer'));
    }

    public function create(){
        return view('computer.create');
    }

    public function store(StoreComputerRequest $request){
        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        Computer::create($data);
        return redirect()->route('admin.computer.index');
    }

    public function edit(Computer $computer){
        return view('computer.edit', compact('computer'));
    }

    public function update(UpdateComputerRequest $request, Computer $computer){
        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        $computer->update($data);
        return redirect()->route('admin.computer.index');
    }

    public function destroy(Computer $computer){
        $computer->delete();
        return redirect()->route('admin.computer.index');
    }
}
