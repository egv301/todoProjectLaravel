<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index() 
    {
    	$tasks = Task::all();
    	return view('tasks.index', compact('tasks'));
    }

    public function create() 
    {
    	return view('tasks.create');
    }

    public function update($id)
    {
        $task = Task::find($id);
        $task->completed = request()->has('completed');
        $task->save();
        
        return back();
    }

    public function store()
    {
    	$attributes = request()->validate(['description' => 'required', 'date' => 'required']);

        Task::create($attributes);

        return back();
    }
}
