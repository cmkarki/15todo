<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
		<link rel="stylesheet" href="{{asset('/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">

 		 <script src="{{asset('/bower_components/jquery/dist/jquery.min.js')}}"></script>	
 		 <script src="{{asset('/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>	
 		 
 		 
</head>
<body>
					<div class="form-group">
					    {!! Form::label('fname', 'First Name:') !!}
					    {!! Form::text('fname') !!}
					</div>
					<div class="form-group">
					    {!! Form::label('lname', 'last Name:') !!}
					    {!! Form::text('fname') !!}
					</div>
					<div class="form-group">
					    {!! Form::label('email', 'Email:') !!}
					    {!! Form::text('email') !!}
					</div>
					<div class="form-group">
					    {!! Form::label('password', 'Password:') !!}
					    {!! Form::password('password') !!}
					</div>
					
					<div class="form-group">
					    {!! Form::submit('Create', ['class'=>'btn primary']) !!}
					</div>
 
</body>
</html>