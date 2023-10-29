@extends('layouts.app')
@section('content')
 <h1>Hospitals</h1>
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
    @if(isset($products) && $products->count() >0)
    @foreach($products as $product)
    <tr>
      <th scope="row">{{$product->id}}</th>
      <th>{{$product->p_price}}</th>
      <td>{{$product->name}}</td>
      <td><img width=100px height = 50px style="..." src="{{asset('product_images/'.$product->image)}}"></td>
      <td><a href="{{route('getproduct',$product->user_id)}}">show_product_info</a></td>
    </tr>
    @endforeach
    @endif
  </tbody>
</table>
@stop
    <!--------------------------------- Start setting box ---------------------------------------->
   
   