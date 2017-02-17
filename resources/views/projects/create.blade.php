@extends('layouts.app')
@section ('title')
task list
@endsection
 
@section('contain')
    <h2>Create Project</h2>
 
    <form action="{{url('/projects')}}" method='post'>
	<input type="hidden" name="_token" id="_token" value="{{csrf_token()}}" />

       <div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name') !!}
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug') !!}
</div>
<div class="form-group">
    {!! Form::submit('submit', ['class'=>'btn primary']) !!}
</div>
</form>
@endsection
 

 
