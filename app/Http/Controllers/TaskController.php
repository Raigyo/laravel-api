<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /*public function index()
    {
        $tasks = Task::all();
        return response()->json($tasks); view('tasks.index', compact('tasks'));
    }*/

    public function index()
    {
      $tasks = Task::all();
      response()->json($tasks);
      return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function edit($id)
    {
        $task = Task::find($id);

        return view('tasks.edit', compact('task'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $task = Task::create($request->all());
        $parameters = ['success' => 'Task has been added successfully', 'task' => $task];
        return redirect('/tasks')->with($parameters);
    }

    public function show(Task $task)
    {
        return $task;
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
           'title'       => 'nullable',
           'description' => 'nullable'
        ]);

        $task->update($request->all());
        $parameters = ['success' => 'Task has been updated successfully', 'task' => $task];
        return redirect('/tasks')->with($parameters);
    }


    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/tasks')->with('success', 'Task has been deleted successfully');
    }
}
