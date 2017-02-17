
<html>
    <head>
        <title>Log in </title>

         <link rel="stylesheet" href="{{asset('/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">

         <script src="{{asset('/bower_components/jquery/dist/jquery.min.js')}}"></script>   
         <script src="{{asset('/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    </head>
    <body>

            <div class="container" style="width: 400px;margin-left: 100px ">
                    <form style="width: 250px; margin-top: 100px" action="/auth/register" method="POST">
                
                    
                        {!! csrf_field() !!}

                       <div class="form-group">
                           <label for="name"> Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                           <label for="email"> Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            <label  for="pwd">Password</label>
                            <input type="password" class="form-control" id="pwd" name="password">
                        </div>

                        <div class="form-group">
                            <label  for="cpwd">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation" id="cpwd">
                        </div>
                         <div class="form-group">
                           <label for="age"> Age</label>
                            <input type="text" class="form-control" id="age" name="age" value="{{ old('age') }}">
                        </div>

                        <div>
                            <button type="submit" class="btn btn-info">Register</button>
                        </div>
                    </form>
                </div>
            
            
            
</body>
</html>