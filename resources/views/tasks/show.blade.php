@extends('layouts.app')
@section ('title')
task list
@endsection
 
@section('contain')
	@foreach($task as $task)
		<h1>{{$task->name}}</h1>
	@endforeach
@endsection