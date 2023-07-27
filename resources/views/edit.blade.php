@extends('layout.app')

@section('title', 'Edit Task')

@section('styles')
  <style>
    .error-message {
      color: red;
      font-size: 0.8rem;
    }
  </style>
@endsection

@section('content')
  <form method="POST" action="{{ route('tasks.update', ['id' => $task->id]) }}">
    @csrf
    @method('PUT')
    <h1>Edit User</h1>
    <div>
        <label for="name">Name</label>
        <input type="text" name = "name" id="name" value="{{ $task->name }}">
        @error('name')
        <p class="error-message">{{ 'Please fill the details.' }}</p>
      @enderror
    </div><br>
    <div>
        <label for="rollno">Rollno</label>
        <input type="number" name = "rollno" id="rollno" value="{{ $task->rollno }}">
        @error('rollno')
        <p class="error-message">{{ 'Please fill the details.' }}</p>
      @enderror
    </div><br>
    <div>
        <label for="city">City</label>
        <input type="text" name = "city" id="city" value="{{ $task->city }}">
        @error('city')
        <p class="error-message">{{ 'Please fill the details.' }}</p>
      @enderror
    </div><br>
    <div>
        <label for="email">Email</label>
        <input type="text" name = "email" id="email" value="{{ $task->email }}">
        @error('email')
        <p class="error-message">{{ 'Please fill the details.' }}</p>
      @enderror
    </div><br>
      <button type="submit">Edit User</button>
    </div>
  </form>
@endsection