<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index_page(){
//        $tasks = Task::all();
        $user_id =Auth::id();
        $tasks = Task::where('user_id',$user_id)->get();

        return view('pages.dashbord',compact('tasks'));
    }
    public function create()
    {
        return view('pages.create');
    }

    public function store(){
       $user_id=Auth::id();
        $task = new Task();
        $task->task =request('task');
        $task->user_id = $user_id;
        $task->is_completed =request('is_completed',false);
        $task->save();

        return redirect('/dashbord');
    }

    public function edit($id){
//     return $id;
       $task = Task::findOrFail($id);


        return view('pages.edit',compact('task'));
    }

    public function update($id){
        $task = Task::findOrFail($id);
        $task->task=request('task');
        $task->is_completed=request('is_completed');
        $task->save();
        return redirect('/dashbord');
    }
    public function delete($id){
        Task::findOrFail($id)->delete();
       return redirect('/dashbord');
    }

}
