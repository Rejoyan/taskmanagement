<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $task = Task::create([
            'title' => $validated['title'],
            'is_completed' => false,
        ]);

        return response()->json($task, 201);
    }


    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
    
        $validated = $request->validate([
            'is_completed' => 'required|boolean',
        ]);
    
        $task->update($validated);
    
        return response()->json($task);
    }


    public function index()
{
    $tasks = Task::where('is_completed', false)->get();
    return response()->json($tasks);
}


    
}
