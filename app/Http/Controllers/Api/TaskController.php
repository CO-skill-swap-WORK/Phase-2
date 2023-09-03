<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function show($id)
    {
        $task = Task::findOrFail($id);

        // Return the task as a formatted API resource
        return new TaskResource($task);
    }
}
