<?php

namespace App\Http\Controllers\Todo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index(){
        $goals = Todo::all();
        return view('todo.index', ['goals' => $goals]);
    }

    public function create(){
        return view('todo.create');
    }

    public function store(request $request){
        $todo = Todo::create($request->all());
        return redirect('todo');
    }

    public function edit($id){
        $todo = Todo::find($id);
        return view('todo.edit', ['todo' => $todo]);
    }

    public function update($id, request $request){
        $todo = Todo::find($id);
        $todo->goal = $request->input('goal');
        $todo->deadline = $request->input('deadline');
        $todo->save();
        return redirect('todo/index');
    }

    public function show($id){
        $todo = Todo::find($id);
        return redirect('todo');
    }

    public function destroy($id){
        $todo = Todo::find($id);
        $todo->delete();
        return redirect('todo/index');
    }
}
