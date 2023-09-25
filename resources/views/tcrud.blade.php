<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Teacher Details</title>
  </head>
  <body>
    <div class="container">
        <a href="{{url('/adddata')}}" class="btn btn-primary my-3">ADD DATA</a>
        @if(Session::has('msg'))
          <p class="alert alert-success">{{Session::get('msg')}}</p>
        @endif
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Gender</th>
      <th scope="col">Password</th>
      <th scope="col">Join_Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @php 
    $i=1;
    @endphp
    @foreach($showdata as $value)
    <tr>
      <td>{{$i,$i++}}</td>
      <td>{{$value->tname}}</td>
      <td>{{$value->mail}}</td>
      <td>{{$value->t_mobile}}</td>
      <td>{{$value->t_gender}}</td>
      <td>{{$value->tpassword}}</td>
      <td>{{$value->join_date}}</td>
      <td>
        <a href="{{url('/editdata/'.$value->id)}}" class="btn btn-success">Edit</a>
        <a href="{{url('/deletedata/'.$value->id)}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
  {{$showdata->links()}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>