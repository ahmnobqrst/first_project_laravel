@extends('layouts.app')
@section('content')

<body>
    <script src="https://kit.fontawesome.com/66f45e81f9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/make-offer.css">
    <style>
       
        .table tr{
            border: 1px solid #ddd;
            text-align: center;
            background: #aaa;
            width: 400px;
            height: 30px;
        }
        .table{
            width: 500px;
        }
        .btn btn-success{
            border-style: solid;
            border-radius: 1px;
        }
    </style>
    <!-------------------------Start Header section---------------------------->
    
    <!-------------start make offer section ----->
    

@if(Session::has('delete'))
 <div class="alert alert-success">
     {{Session::get('delete')}}
 </div>
@endif



@if(Session::has('error'))
<div class="alert alert-danger">
     {{Session::get('error')}}
 </div>
@endif
   <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">user name</th>
      <th scope="col">user password</th>
      <th scope="col">user phone</th>
      <th scope="col">user email</th>
      <th scope="col">user operations</th>
    </tr>
  </thead>
  <tbody>
    @foreach($user_data as $user)
    <tr>
      <th scope="row">{{$user->user_id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->password}}</td>
      <td>{{$user->phone}}</td>
      <td>{{$user->email}}</td>
      <td><a href="{{url('edituser/'. $user->user_id)}}" class="btn btn-success">Edit user</a></td>
      <td><a href="{{url('updatetuser/'.$user->user_id)}}" class="btn btn-success">Update user</a></td>
      <td><a href="{{route('delete',$user->user_id)}}" class="btn btn-success">Delete user</a></td>
    </tr>
    @endforeach
    
  </tbody>
</table>
    <!--------------------------------- Start setting box ---------------------------------------->
   
   
</body>

@stop


</html>