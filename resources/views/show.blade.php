
@extends('layout.app')

@section('title', 'Show Task')
@section('styles')
  <style>
    .button-container {
      display: inline-block;
    }
  </style>
@endsection

@section('content')
    <h1>User Information</h1>
    <p>Name: {{ $task['name'] }}</p>
    <p>Rollno: {{ $task['rollno'] }}</p>
    <p>City: {{ $task['city'] }}</p>
    <p>Email: {{ $task['email'] }}</p>
    <button type="submit"><a href="{{ route('tasks.edit', ['id' => $task->id]) }}">Edit User</a></button>
    {{-- <button type="submit"><a href="{{ route('tasks.destory', ['id' => $task->id]) }}">Delete User</a></button> --}}
    <form action="{{ route('tasks.destroy', ['id' => $task->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
      </form>
   
@endsection
