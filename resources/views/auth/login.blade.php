<html>
    <head>
        <title>Log in </title>

         <link rel="stylesheet" href="{{asset('/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">

         <script src="{{asset('/bower_components/jquery/dist/jquery.min.js')}}"></script>   
         <script src="{{asset('/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    </head>
    <body>

        <table class="container">
        <tr>
            <td>
                <div class="container" style="width: 400px;margin-left: 100px ">
                    <form style="width: 250px; margin-top: 100px" action="/auth/login" method="POST">
                        {!! csrf_field() !!}
                        <div class="form-group">
                             <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="Password1">Password</label>
                            <input type="password" class="form-control" name="password" id="password"" placeholder="Password">
                        </div>
              
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember
                            </label>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </td>
            
            <td>
            <div style="margin-top: 0px">
            <div class="jpt" style="margin-right: 100px;margin-top:0px;margin-left: 50px; width: 200px">
            Not A Register User?????
            <br>
            <br> 
            <form action="/auth/register" method="get">
            <input type='submit' value='Regester Now' class='btn btn-info' >
            </form>
            <br>
        
             </div>
             </div>
            </td>
           
         </tr>
         </table>
</body>
</html>

