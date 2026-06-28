<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activeTasks = Task::where('active', TRUE)->orderBy('creationDate', 'desc')->get();
        $inactiveTasks = Task::where('active', FALSE)->orderBy('creationDate', 'desc')->get();

        return view('tasks.index', compact(['activeTasks', 'inactiveTasks']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $task = new Task();
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->creationDate = date('Y-m-d');
        $task->active = 1;

        $task->save();

        return redirect(route('tasks.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $task->title = $request->input('title');
        $task->description = $request->input('description');


        $task->save();

        return redirect(route('tasks.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect(route('tasks.index'));
    }



    /**
     * Change status of a task
     */
    public function finish(Request $request, Task $task)
    {
        if($task->active == 1){
            $task->active = 0;
        }
        else {
            $task->active = 1;
        }

        $task->save();

        return redirect(route('tasks.index'));
    }
}
