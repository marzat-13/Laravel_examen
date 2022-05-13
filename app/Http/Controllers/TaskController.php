<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('index', [
            'tasks' => \App\Models\Task::all(),
        ]);
    }

    function task($id)
    {
        return view('single', [
            'tasks' => \App\Models\Task::find($id),
        ]);
    }

    function delete($id)
    {
        return view('after-delete', [
            'tasks' => \App\Models\Task::find($id)->delete(),
        ]);
    }

    public function index2()
    {
        return view('index', [
            'tasks' => \App\Models\Task::all()->orderBy("id"),
        ]);
    }
}
