<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Product;
use App\Models\Reservation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewReservations(){
        $reservations=Reservation::where([
          ['status','inProgress']
        ])->get();
        return view('Admin.reservations',compact('reservations'));
    }

    public function giveTable(Request $request,$id){
        $res=Reservation::where('id',$id);
        $res->update(['table_N'=>$request->tableN]);
        return redirect()->back();
    }
    public function showProducts(){
        $products=Product::all();
        return view('Admin.dashboard',compact('products'));
    }

    public function viewFeedbacks(){
        $feedbacks=Feedback::all();
        return view('Admin.feedbacks',compact('feedbacks'));
    }

    public function viewOrders(){
        return view('Admin.orders');
    }

    public function newReservation(Request $request){
      Reservation::create([
     //   'admin_id'=>auth()->guard('admin')->user()->id,
          'admin_id'=>'1',
          'name'=>$request->guest_name,
          'phone'=>$request->guest_phone,
          'guests_N'=>$request->guests_number,
          'time'=>$request->datime
      ]);
      return redirect()->back();
    }

    public function addProduct(Request $request){
        $image=$request->file('img')->getClientOriginalName();
        $path= $request->file('img')->storeAs('products',$image,'imgs');
        Product::create([
            //   'admin_id'=>auth()->guard('admin')->user()->id,
                 'admin_id'=>'1',
                 'title'=>$request->title,
                 'description'=>$request->description,
                 'price'=>$request->price,
                 'category'=>$request->category,
                 'image'=>$path
             ]);
        return redirect()->back();
    }

}
