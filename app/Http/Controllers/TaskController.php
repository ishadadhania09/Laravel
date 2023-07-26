<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function register(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'rollno' => 'required',
            'city' => 'required',
            'email' => 'required'
        ]);

        $task = new Task;
        $task->name = $data['name'];
        $task->rollno = $data['rollno'];
        $task->city = $data['city'];
        $task->email = $data['email'];
        $task->save();

        echo("Latttest detail");
        echo("Name".$data['name']);
        echo("Rollno.".$data['rollno']);
        echo("City ".$data['[city']);
        echo("Email ".$data['email']);


    }
}
