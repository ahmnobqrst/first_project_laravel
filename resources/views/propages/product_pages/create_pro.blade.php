@extends('layouts.app')
@section('content')
    <body>
       
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    {{__('message_offer.add offer with form')}}
                </div>
                @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
                <div class="login-form  col-offset-2 col-12 col-lg-4 text-center col-sm-12 col-md-12">
                    <form method ="post" action="{{route('stored_product')}}" enctype="multipart/form-data">
                        @csrf
                        <h5>product details</h5>
                        <div class="form-group">
                            <input type="text" class="form-control" name ='p_price' placeholder="enter product price">
                            @error('p_price')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name ='name' placeholder="enter product name">
                            @error('name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" name ='image'>
                            @error('image')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                       
                        <div class="form-group">
                            <button>add product</button> 
                        </div>
                    </form>
                </div>

                

            </div>
        </div>
    </body>
    @stop
</html>
