<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller{

    public function index(Task $task){
        return view('TodoList.modules.task.index', ["data" => $task->paginate()]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'tugas' => 'required|max:100',
            'status' => 'boolean',
            'keterangan' => 'required|max:100',
        ]);

        Task::create($validateData);

        return redirect('/')->with('success', 'Data berhasil disimpan!');
    }

    public function edit(Task $task)
    {
        return view('TodoList.modules.task.edit', ["task" => $task]);
    }

    public function update(Request $request, Task $task){
        $validateData = $request->validate([
            "tugas" => "required|max:100",
            "status"=> "boolean" ,
            "keterangan" => "required|max:100",
        ]);

        $task->where("id", $task->id)->update($validateData) ;

        return redirect('/')->with('success', 'Data berhasil diupdate!');
    }

    public function destroy(Task $task){
        $task->delete($task->id);
        return redirect('/')->with('success', 'Data berhasil dihapus!');
    }

    public function getDataById(Task $task){
        return view("TodoList.modules.task.show", [
        "data" => $task]);
    }
}
