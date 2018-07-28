<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Record;
use App\Registration;
use App\User;
use App\Role; 
use App\Http\Requests\RegistrationDataRequest;



class RegistrationsController extends Controller

{

   /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function Index()
    {
        return view('registrations');
    }
    

    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Aboutus()
    {
       return view('Aboutus');
    }
    

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Contact()
    {
       return view('Contact');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Council()
    {
         return view('Council');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Committees()
    {
        return view('Committees');
    }
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Events()
    {
        return view('Events');
    }
    
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Membership()
    {
        return view('Membership');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('registration.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function profile(){
        return view('Registration', array('user' => Auth::user() ) );
     }


    public function store(RegistrationDataRequest $request)
    {
     
         $input=$request->all();
         $user = Auth::user();
    
       $user->registration()->create($input);
       $request->session()->flash('flash_message','profile was succesfully added');


       return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Editing the registration page
        $registration = Registration::findOrFail($id);

         return view('registration.edit', compact('registration'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RegistrationDataRequest $request, $id)
    {
        $registration = Registration::findOrFail($id);

         $input=$request->all();
            $registration->update($input);

             $request->session()->flash('flash_message','profile was succesfully updated');


       return redirect('/profile');
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
