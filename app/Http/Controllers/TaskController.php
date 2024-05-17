<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function list(string $user_id) {
        return Task::where('user_id', $user_id)->get();
    }

    public function create(Request $request) {
        $newTask = new Task;
        $newTask->title = $request->input('title');
        $newTask->description = $request->input('description');
        $newTask->user_id = $request->input('user_id');
        if($newTask->save()) {
            return $newTask;
        }
    }

    public function update(Request $request, string $taskId) {
        Task::where('id', $taskId)->update(['title' => $request->input('title'), 'description' => $request->input('description')]);
        return Task::where('id', $taskId)->get();
    }

    public function delete(string $taskId) {
        return Task::where('id', $taskId)->delete();
    }
}