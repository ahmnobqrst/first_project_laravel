<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Product;
use App\Traits\Product_Trait;

class ProController extends Controller
{
    public function create(){
        return view('propages.create');
    }

    public function store(Request $result){
     
     //validate data before insert this data into database
     
    

     // insert data into database

        User::create([
         'name'=>$result->name,
         'password'=>sha1($result->password),
         'phone'=>$result->phone,
         'email'=>$result->email,
        ]);

        return redirect()->back()->with(['success'=> "added succeeded"]);
    }

    public function ShowUserData(){

        $user_data = User::select('user_id','name','password','phone','email')->get();
        return view('propages.user_info',compact('user_data'));
    }

    public function edituserdata($user_id){
     $users = User::find($user_id);
     if(!$users)
        return redirect()->back();
     $users =User::select('user_id','name','password','phone','email')->find($user_id);
     return view('propages.reports.user_Id_Details',compact('users'));

    }

    public function Deletuser($user_id){
     
     $user = User::find($user_id); // equal offer::where('id','$offer_id')->first();
     if(!$user)
        return redirect()->back()->with(['error'=>__('message_offer.error')]);
     
     $user->delete();
     return redirect()->route('show')->with(['delete'=>__('message_offer.deleted')]);

    }

    public function ShowUpdatebeforeupdate($update_user_id){

    // Offer::findorfail($update_id);

    $up_user = User::find($update_user_id);
     if(!$up_user)
        return redirect()->back();
     $up_user = Offer::select('user_id','name','password','phone','email')->find($update_user_id);
     return view('propages.update_user_data',compact('up_user'));

  }

  public function SaveUpdate(Request $result,$up_user_id){
  
     //$this->SaveImage($result->photo,'images/offer_picture');

 // $this->saveupdateimage($result->photo,'images/offer_picture');
    
    $up_user = User::find($up_user_id);// find function search by id only
   if(!$up_user)
      return redirect()->back();

   $up_user->update($result->all());
   return redirect()->back()->with(['stored'=>__('message_offer.results')]);
    
  }

 
    

}
