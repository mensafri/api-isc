<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @group Tasks
 * Endpoints for managing tasks
 */
class TaskController extends Controller
{
    /**
     * List tasks
     * @responseField id int
     * @responseField title string
     * @responseField description string|null
     */
    public function index(): JsonResponse
    {
        return response()->json(Task::all());
    }

    /**
     * Store task
     * @bodyParam title string required
     * @bodyParam description string nullable
     */
    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'title'       => 'required|string|max:120',
            'description' => 'nullable|string',
        ]);

        $task = Task::create($data);
        return response()->json($task, 201);
    }

    /**
     * Show single task
     */
    public function show(Task $task): JsonResponse
    {
        return response()->json($task);
    }

    /**
     * Update task
     */
    public function update(Request $request, Task $task): JsonResponse
    {
        $data = $request->validate([
            'title'       => 'required|string|max:120',
            'description' => 'nullable|string',
        ]);

        $task->update($data);
        return response()->json($task);
    }

    /**
     * Delete task
     */
    public function destroy(Task $task): JsonResponse
    {
        $task->delete();
        return response()->json(null, 204);
    }
}
