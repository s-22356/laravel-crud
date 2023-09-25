<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Login Page</title>
  </head>
  <body>
  <div class="container">
    @if(Session::has('msg'))
    <p class="alert alert-success">{{Session::get('msg')}}</p>
    @endif
    <form action="{{url('/loginrecords')}}" method="post">
        @csrf
    <h2>Login Page</h2>
  <div class="form-group">
    <label for="">Email Address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email">
    <span class="text-danger">
        @error('email')
            {{'*'.$message}}
        @enderror
    </span>
  </div>

  <div class="form-group">
    <label for="">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
    <span class="text-danger">
        @error('password')
            {{'*'.$message}}
        @enderror
    </span>
  </div>
 <input type="submit" class="btn btn-primary" value="submit">
</form>
   </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>