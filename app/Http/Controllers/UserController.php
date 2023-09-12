<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Feedback;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function userlog(Request $request){
      if(!Auth::guard()->attempt($request->only('email','password'))){
           return redirect()->back()->with('error','Invalid Credentials');
          };
          return redirect()->intended(route('home'));
      }
  
      public function createuser(Request $request){
          User::create([
              'name' => $request['username'],
              'email' => $request['email'],
              'password' => Hash::make($request['password']),
              'phone' => $request['phone'],
              'address' => $request['address']
          ]);

          Auth::guard()->attempt($request->only('email','password'));
  
          return redirect()->route('home');
      }
  
      public function destroy(){
          Auth::guard()->logout();
          return redirect()->route('signin');
      }
  
      public function updateprofile(Request $request){
          $user=User::where('id',auth()->user()->id);
          $user->update([
              'name'=>$request->name,
              'email'=>$request->email,
              'phone'=>$request->phone,
          ]);
          return redirect()->back();
  
      }


    public function showVegan(){
        $vegans=Product::where([
        ['category','vegan']
        ])->get();
        return view('menu',compact('vegans'));
    }

    public function showKeto(){
        $ketos=Product::where([
            ['category','keto']
        ])->get();
        return view('menu',compact('ketos'));
    }

    public function showDash(){
        $dashs=Product::where([
            ['category','dash']
        ])->get();
        return view('menu',compact('dashs'));
    }
    public function reserve(Request $request){
        $reservation= new Reservation();
        $reservation->admin_id = '1';
        $reservation->name = $request->guest_name;
        $reservation->phone = $request->guest_phone;
        $reservation->guests_N = $request->guests_number;
        $reservation->time = $request->datime;
        $reservation->save();
        return back();
    }
    public function sendFeedback(Request $request){
         $feedback= new Feedback();
         $feedback->feedback = $request->content;
         $feedback->rate = $request->rating;

         $feedback->save();
         return back();
     }

     public function myorders(){
        return view('User.orders');
     }

     public function checkout(){
        return view('User.checkout');
     }
}
