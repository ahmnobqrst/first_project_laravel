<?php


namespace App\Http\Controllers;

use App\Traits\Product_Trait;
use App\User;
use App\Models\Product;


use Illuminate\Http\Request;


class ProductController extends Controller
{


  
  public function create_product(){

    return view('propages.product_pages.create_pro');
  }

  public function store_product(Request $result){
     
     //validate data before insert this data into database
   
   $file_name = $this->SaveImageproduct($result->image,'product_pages');

     // insert data into database

        Product::create([
         'p_price'=>$result->p_price,
         'name'=>$result->name,
         'image'=>$file_name,
        ]);

        return redirect()->back()->with(['success'=>__('message_offer.result')]);
    }

     public function user_product(){

    $user = User::find(1);
      return $user->Product;

}

public function getproductData(){

    $products = Product::select('id','name','image')->get();

    return view('propages.product_user.pro_usr',compact('products'));
}

public function showddataofprodanduser($user_id){

  $product = User::find($user_id);
  if(!$product)
    return abort('404');

  $productt = $product->users;

  return view('propages.product_user.product_data',compact('productt'));

}

public function editproduct($product_id){
   
   $product = Doctor::find($product_id);

   if(!$product)
     return abort('404');

 $prod = Product::select('id','p_price','name','image')->find($product_id);

 return view('propages.product_user.product_data_info',compact('prod'));
}

public function deleteproduct($product_id){

 $product = Product::find($product_id);

   if(!$product)
     return redirect()->back()->with(['error'=>'not fonnd']);

 $product->delete();

 return redirect()->route('edit_product',$product->id)->with(['delete'=>__('message_offer.deleted')]);
}

}
