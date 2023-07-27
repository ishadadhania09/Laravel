<h1>
  The list of tasks
</h1>

<div>
  
  {{-- @if (count($tasks)) --}}
  @forelse ($tasks as $task)
    <div>
      <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{$task->id ." ". $task->name }}</a>
    </div>
  @empty
    <div>There are no tasks!</div>
  @endforelse