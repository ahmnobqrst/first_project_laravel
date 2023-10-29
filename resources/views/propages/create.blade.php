@extends('layouts.app')
@section('content')
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item active">
        <a class="nav-link" href="">  <span class="sr-only">(current)</span></a>
      </li>
     
  </div>
</nav>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Add New_User from form
                </div>
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
                <div class="login-form  col-offset-2 col-12 col-lg-4 text-center col-sm-12 col-md-12">
                    <form method ="post" action="{{route('store')}}" enctype="multipart/form-data">
                        @csrf
                        <h5>user information</h5>
                        <div class="form-group">
                            <input type="text" class="form-control" name ='name' placeholder="enter user name">
                            @error('name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name ='password' placeholder="enter user password">
                            @error('password')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name ='phone' placeholder="Enter user phone">
                            @error('phone')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="enter user email">
                            @error('email')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <button>create user</button> 
                        </div>
                    </form>
                </div>

                

            </div>
        </div>
    </body>
    @stop
</html>
