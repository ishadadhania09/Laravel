<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class view extends Controller

{
    public function view(){
    $view = Task::all();
    return view('view', compact('view'));
}
}