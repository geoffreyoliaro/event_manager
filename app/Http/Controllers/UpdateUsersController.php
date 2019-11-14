<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PharIo\Manifest\Email;
use App\Mail\Booking;
use Symfony\Component\Mime\Email as SymfonyEmail;

class UpdateUsersController extends Controller
{
    public function store(Request $request)
    {   
        $this->validate($request, [
            'username'=>'required',
            'email'=>'required',
            'regularSeats' =>'required',
            'vipSeats' => 'required',
            'invoice'=> 'nullable',
            
        ]);
        
        $update = new Updates;
        $update->username =$request->input('username');
        $update->email =$request->input('email');
        $update->regularSeats =$request->input('regularSeats');
        $update->vipSeats =$request->input('vipSeats');
        $update->invoice =$request->input('invoice');
        $update->save();

         \mail::to($update)->send(new Booking);
        
        return view('user.pop');
    }

}
