{{-- template inheritrance --}}
@extends('layouts.app')

{{-- In here I just use text no html. So i dont need to use @endsection --}}
@section('title', $task->title)

@section('content')

<p>{{ $task->description }}</p>

@if($task->long_description)
<p>{{ $task->long_description }}</p>
@endif

<p>{{ $task->created_at }}</p>
<p>{{ $task->updated_at }}</p>

@endsection