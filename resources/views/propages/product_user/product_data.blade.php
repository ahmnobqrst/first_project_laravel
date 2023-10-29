@extends('layouts.app')
    <!-------------start make offer section ----->
@section('content')
    <h1>Doctors</h1>
   <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">product price</th>
      <th scope="col">product name</th>
      <th scope="col">product image</th>
      <th scope="col">{{__('message_offer.options')}}</th>
    </tr>
  </thead>
  <tbody>
    @if(isset($productt) && $productt->count() >0)
    @foreach($productt as $productts)
    <tr>
      <th scope="row">{{$productts->id}}</th>
      <th>{{$productts->p_price}}</th>
      <th>{{$productts->name}}</th>
      <td><img width=100px height = 50px style="..." src="{{asset('product_images/'.$productts->image)}}"></td>
       <td><a href="{{route('edit',$doctor->id)}}" class="alert alert-success">edit</a></td>
       <td><a href="{{route('delete_doctor',$doctor->id)}}" class="alert alert-danger">Delete</a></td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
@stop

    <!--------------------------------- Start setting box ---------------------------------------->
   
   

