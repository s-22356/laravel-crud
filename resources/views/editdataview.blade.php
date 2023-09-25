<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>ADD_TEACHERS_DETAILS</title>
  </head>
  <body>
   <div class="container">
    <a href="{{url('/')}}" class="btn btn-primary my-3">SHOW DATA</a>
    @if(Session::has('msg'))
    <p class="alert alert-success">{{Session::get('msg')}}</p>
    @endif
    <form action="{{url('/updatedata/'.$editdata->id)}}" method="post">
        @csrf
    <div class="form-group">
    <label for="">Name</label>
    <input type="text" class="form-control" value="{{$editdata->tname}}" name="name" placeholder="Enter name">
    <span class="text-danger">
        @error('name')
            {{'*'.$message}}
        @enderror
    </span>
    </div>

  <div class="form-group">
    <label for="">Email Address</label>
    <input type="email" class="form-control" value="{{$editdata->mail}}" name="email" placeholder="Enter email" >
    <span class="text-danger">
        @error('email')
            {{'*'.$message}}
        @enderror
    </span>
  </div>

<div class="form-checkform-check form-check-inline">
<label for="">Select Gender&nbsp&nbsp</label>
  <div>
  <input class="form-check-input" type="radio"
  name="gender" value="M"
    {{ $editdata->t_gender == 'M' ? 'checked' : '' }}>
  <label class="form-check-label">
    Male&nbsp&nbsp
  </label>
</div>
<div>
  <input class="form-check-input" type="radio" name="gender" value="F"
  {{ $editdata->t_gender == 'F' ? 'checked' : '' }}>
  <label class="form-check-label">
    Female&nbsp&nbsp
  </label>
</div>
<div>
  <input class="form-check-input" type="radio" name="gender" value="O"
  {{ $editdata->t_gender == 'O' ? 'checked' : '' }}>
  <label class="form-check-label">
    Others
  </label>
</div>
    <span class="text-danger">
        @error('gender')
            {{'*'.$message}}
        @enderror
    </span>
</div>



  <div class="form-group">
    <label for="">Mobile Number</label>
    <input type="text" class="form-control" name="mobile" placeholder="Enter mobile number" value="{{$editdata->t_mobile}}">
    <span class="text-danger">
        @error('mobile')
            {{'*'.$message}}
        @enderror
    </span>
  </div>

  <div class="md-form md-outline input-with-post-icon datepicker" inline="true">
  <label for="example">Joining Date</label>
  <input placeholder="Select date" type="date" name="joindate" class="form-control" value="{{$editdata->join_date}}">
  <span class="text-danger">
        @error('dob')
            {{'*'.$message}}
        @enderror
    </span>
  <i class="fas fa-calendar input-prefix"></i>
  </div>


  <div class="form-group">
    <label for="">Password</label>
    <input type="password" class="form-control" value="{{$editdata->tpassword}}" name="password" placeholder="Password">
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