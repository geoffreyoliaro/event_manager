<?php

namespace App\Http\Controllers;

use App\Record;
use Illuminate\Http\Request;

class RootController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
   
     public function index()
    {
        return view("ems.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ems.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'eventName'=>'required',
            'eventLocation'=>'required',
            'vipSeats' =>'required',
            'vipPrice' => 'required',
            'regularSeats'=> 'required',
            'regularPrice'=>'required',
            'eventImg' =>'image|nullable|max:1999'
        ]);
        
        if($request->hasFile('eventImg')){
            $filenameWithExt =$request->file('eventImg')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension =$request->file('eventImg')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path =$request->file('eventImg')->storeAs('public/cover_images',$fileNameToStore);
            }   else{
             $fileNameToStore ='noimage.jpg';
        }
        $event = new Record;
        $event->eventName =$request->input('eventName');
        $event->eventLocation =$request ->input('eventLocation');
        $event->vipSeatsAvailable =$request->input('vipSeats');
        $event->vipPrice =$request->input('vipPrice');
        $event->regularPrice =$request->input('regularPrice');
        $event->regularSeatsAvailable =$request->input('regularSeats');
        $event->promoImage =$fileNameToStore;
        $event->save();
        
        return view('ems.index');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
