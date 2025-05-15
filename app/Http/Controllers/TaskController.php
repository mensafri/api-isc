<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function index(): View
    {
        $tasks = Task::latest()->paginate(20);
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:120',
            'description' => 'nullable|string',
        ]);

        Task::create($validated);
        return back()->with('success', 'Task created.');
    }

    public function destroy(Task $task): RedirectResponse
    {
        $task->delete();
        return back()->with('success', 'Task deleted.');
    }
}
