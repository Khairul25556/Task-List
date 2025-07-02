@extends('layouts.app')

@section('title', 'The list of Tasks:')

@section('content')
    {{-- @if(count($tasks)) --}}
        @forelse($tasks as $task)
        <div>
            <a href="{{route('tasks.show', ['id' => $task->id]) }}">{{$task->title}}</a>
            {{-- <a href="{{route('tasks.show', ['id' => $task->id]) }}">{{$task->description}}</a> --}}
        </div>
        @empty
            <div>There are no tasks!</div>
        @endforelse
    {{-- @endif --}}
@endsection

@section('footer')
    @if($tasks)
    <p>Total tasks are: {{ count($tasks) }}</p>
    @else
    <p>Tasks are empty!</p>
    @endif
@endsection


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
