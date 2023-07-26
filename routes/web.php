<?php

// use App\Http\Controllers\RegisterController;
use App\Models\Task;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',function(){
    return view('welcome');
});

Route::get('/create',function(){
    return view('create');
});

Route::get('/tasks', function () {
    $tasks = Task::all();
    return view('index', ['tasks' => $tasks]);
})->name('tasks.index');

Route::get('/tasks/{id}/edit', function ($id) {
    return view('edit', [
        'task' => Task::findOrFail($id)
    ]);
})->name('tasks.edit');

Route::get('/tasks/{id}', function ($id){
    return view('show',[
        'task' => Task::findOrFail($id)
    ]);
})->name('tasks.show');

Route::post('/tasks', function (Request $request) {
    // dd($request->all());
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
    echo("City ".$data['city']);
    echo("Email ".$data['email']);


    return redirect()->route('tasks.show', ['id' => $task->id])
        ->with('success', 'User successfully created!');
})->name('tasks.store');



Route::put('/tasks/{id}', function ($id, Request $request) {
    $data = $request->validate([
        'name' => 'required',
        'rollno' => 'required',
        'city' => 'required',
        'email' => 'required'
    ]);

    // Find the existing task by ID
    $task = Task::findOrFail($id);

    // Update the attributes of the existing task
    $task->name = $data['name'];
    $task->rollno = $data['rollno'];
    $task->city = $data['city'];
    $task->email = $data['email'];
    $task->save();

    return redirect()->route('tasks.show', ['id' => $task->id])
        ->with('success', 'User updated successfully!');
})->name('tasks.update');

Route::delete('/tasks/{id}', function ($id) {
    // Find the existing task by ID
    $task = Task::findOrFail($id);

    // Delete the task
    $task->delete();

    return redirect()->route('tasks.index')
        ->with('success', 'User deleted successfully!');
})->name('tasks.destroy');

// Route::post('/register',[RegisterController::class,'register']);
Route::post('/register',[TaskController::class,'register']);



Route::get('/post',[view::class, 'view']);