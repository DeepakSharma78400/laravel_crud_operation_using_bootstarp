<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    public function show(Task $task)
    {
        return view('tasks.show',compact('task',$task));
    }

    public function edit(Task $task)
    {
        return view('tasks.edit',compact('task',$task));
    }
    public function delete()
    {
        $task->delete();
        $request->session()->flash('message', 'Successfully deleted the task!');
        return redirect('tasks');
    }
}
