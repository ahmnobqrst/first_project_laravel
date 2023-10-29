@extends('layouts.app')

@section('content')
    <h1>Doctors</h1>
    
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
      <th scope="col">product price</th>
      <th scope="col">product name</th>
      <th scope="col">product image</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{$prod->id}}</th>
      <th>{{$prod->p_price}}</th>
      <th>{{$prod->name}}</th>
      <td><img width=100px height = 50px style="..." src="{{asset('product_images/'.$prod->image)}}"></td>
    </tr>
  </tbody>
</table>
@stop
    <!--------------------------------- Start setting box ---------------------------------------->
   
   