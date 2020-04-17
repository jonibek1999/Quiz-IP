<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


class TasksController extends Controller
{
    public function getFirstPage() {

    	return view('tasks.task', [
    		'tasks' => Task::all()
    	]);
    }

    public function taskEdit(Request $req) {

        $this->validate($req, [
            'title' => 'required|regex:/([a-zA-Z]+\s?\b){2,}/'
        ]);

        $task = Task::find($req->input('id'));
        if(Gate::denies('task-checking', $task)) {
            return redirect()->route('getFirstPage');
        }
        else{
        $task->title = $req->input('title');
        $task->save();

        return redirect()->route('getFirstPage')->with([
            'info'=>'Task '. $req->input('title').' successfully updated!'
        ]);
        }
    }

    public function taskCreate(Request $req) {
        $this->validate($req, [
            'title' => 'required|regex:/([a-zA-Z]+\s?\b){2,}/'
        ]);

        $user = Auth::user();
        $task = new Task([
            'title'=> $req->input('title')
            ]);

        $user->tasks()->save($task);

        return redirect()->route('getFirstPage')->with([
            'info'=>'Task '. $req->input('title').' successfully created!'
        ]);
    }

    public function taskDelete($id) {
        $task = Task::find($id);
        $taskName = $task->title;

        if(Gate::denies('task-checking', $task)) {
            return redirect()->route('getFirstPage');
        }
        else{
        $task->delete();

        return redirect()->route('getFirstPage')->with([
            'info'=>'Task '. $taskName.' successfully deleted!'
        ]);
        }
    }

    public function getTaskEdit($id) {
    	$task = Task::find($id);
        if(Gate::denies('task-checking', $task) || !Auth::check()) {
            return redirect()->route('getFirstPage');
        }
        else{
    	return view('tasks.edit', [
    		'task' => $task
    	]);
    	}
    }


}
