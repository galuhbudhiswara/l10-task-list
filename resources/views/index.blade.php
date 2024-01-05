@extends('layouts.app')


@section('title', 'The list of tasks')

<div>
    {{-- @if (count($tasks))
        @foreach ($tasks as $tasks)
            <div>{{ $tasks-> title }}</div>
        @endforeach
    @else
        <div>There are no task</div>
    @endif --}}

@section('content')
    @forelse ($tasks as $tasks)
        <div>
            <a href="{{ route('tasks.show', ['task' => $tasks->id]) }}">{{ $tasks->title }}</a>
        </div>
    @empty
        <div>There is no tasks</div>
    @endforelse
</div>
@endsection