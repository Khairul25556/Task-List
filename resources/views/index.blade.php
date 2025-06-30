<h1>The list of tasks</h1>

<div>
    {{-- @if(count($tasks)) --}}
        @forelse($tasks as $task)
        <div>
            <a href="{{route('tasks.show', ['id' => $task->id]) }}">{{$task->title}}</a>
        </div>
        @empty
            <div>There are no tasks!</div>
        @endforelse
    {{-- @endif --}}
</div>


{{-- <div>
    @forelse($tasks as $task)
        @if(strlen($task->description) === 18)
            <p>{{ $task->description }}</p>
        @else
            <h4>The task description is too long.</h4>
        @endif
    @empty
        <div>There are no descriptions!</div>
    @endforelse
</div> --}}
