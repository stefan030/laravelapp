<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function index ()
    {
        $tasks = Task::all();
        // return $tasks; // returns JSON - great stuff for APIs

        return view('tasks.index', compact('tasks'));
    }

    public function show ($id)
    {
        $task = Task::find($id);

        // return $tasks; // returns JSON - great stuff for APIs

        return view('tasks.show', compact('task'));
    }

}
