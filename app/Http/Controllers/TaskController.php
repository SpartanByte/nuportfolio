<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // create functionality is handled by a Vue form
    public function index()
    {
        $tasks = Task::latest()->get();
        return view('/vue')->with(compact('tasks'));
        // return Task::latest()->get();
    }

        // create functionality is handled by a Vue form
    public function taskList()
    {
         return view('/vue')->with(compact('tasks'));
    }
    public function show(){
        //
    }
    public function update(){
        //
    }
    public function store(Request $request)
    {
            $this->validate($request, [ 
                    'body' => 'required|max:500'
                ]);


            return Task::create(['body' => request('body')]);
            $postTitle = $request->title;
            // $task = new Task;
            // $body = $request->body;

            // $task->body = $body;
            // $post->save();

            // return view('/api/tasks');
            return view('/vue');

    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return 204;
    }
}