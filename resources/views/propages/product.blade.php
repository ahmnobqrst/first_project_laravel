@extends('layouts.app')

@section('content')

<body>
    <script src="https://kit.fontawesome.com/66f45e81f9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/make-offer.css">
    <!-------------------------Start Header section---------------------------->
    
    <!-------------start make offer section ----->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    
      <li class="nav-item active">
        <a class="nav-link" href=""> <span class="sr-only">(current)</span></a>
      </li>
    
  </div>
</nav>
    <div class="add-offer">

        <div class="container">
            <div class="row">
                <div class="offer-desc col-6">
                    <h3>Add your Product</h3>
                   
                </div>
                @if(Session::has('stored'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('stored')}}
                </div>
                @endif
                <div class="offer-form col-6">
                    <form method ="post" action="{{route('add_product')}}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">product price </label>
                                <input type="text" class="form-control" name = "p_price" id="inputEmail4" placeholder="product price">
                                @error('name_ar')
                               <small class="form-text text-danger">{{$message}}</small>
                               @enderror
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">product name</label>
                                <input type="text" class="form-control" name ="name" id="inputPassword4" placeholder="product name">
                                @error('p_price')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <!--<div class="form-group">
                            <label for="inputAddress">product image</label>
                            <input type="file" class="form-control" name ="image" id="inputPassword4" placeholder="product image">
                            @error('image')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>-->
                        
                        <button type="submit" class="btn btn-primary  btn-block">insert product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------- Start setting box ---------------------------------------->
   
    
</body>
@stop

</html>