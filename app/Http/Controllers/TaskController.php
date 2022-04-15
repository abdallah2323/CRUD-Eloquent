<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Task;

class TaskController extends Controller
{
    
    public function index(){
        $tasks = Task::all();
        return view('tasks/index', compact('tasks'));
    }

    public function store(Request $req){
        $validate = $req->validate([
            'name'=> 'required|max:20|min:3',
        ]);
        $task = new Task();
        $task->name = $req->name;
        $task->save();
        return redirect()->back();
    }

    public function destroy(Request $req){
        $task = Task::find($req->id);
        $task->delete();
        return redirect()->back();
    }

    public function edit($id){
        $task = Task::find($id);
        $tasks = Task::all();
        return view('tasks.edit', compact('task','tasks'));
    }

    public function update(Request $req){
        $validate = $req->validate([
            'name'=> 'max:20|min:3',
        ]);
        $task = Task::find($req->id);
        $task->name = $req->name;
        $task->save();
        return redirect('/');
    }

}
