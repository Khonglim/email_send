<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AppointmentMail;
use Illuminate\Support\Facades\Mail;
use App\Email;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'g-recaptcha-response' => 'required|captcha'
       ]);
            
            $objDemo = new Email();
            $objDemo->firstname = $request->first_name;
            $objDemo->lastname = $request->last_name;
            $objDemo->phonenumber = $request->phone;
            $objDemo->email = $request->email;
            $objDemo->store = $request->store;
            $objDemo->date_reserve = $request->date_reserve;
            $objDemo->message = $request->message;
           
            $objDemo->ip = $request->ip();

            $objDemo->save();
            //$contact = Contact::all();
           // foreach ( $contact as  $contacts){
            
           // }
            Mail::to('tr.narathorn@nioachievers.com')->send(new AppointmentMail($objDemo));
          
            dd("Email is Send.");
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
