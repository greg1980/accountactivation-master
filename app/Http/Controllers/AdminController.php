<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use App\Http\Requests\usersRequest;
class AdminController extends Controller


{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function admin()
    // {
    //     return view('admin.index');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function users()
    {

        $users =User::all();


        return view('admin/users', compact('users'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       $roles = Role::pluck('name','id')->all();

       return view('admin/create', compact('roles'));



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(usersRequest $request)
    {
       
        
        $Users=new User;

        $Users->name = $request->name;
        $Users->password=bcrypt($request->password);
        $Users->email = $request->email;
        $Users->active = $request->active;
        $Users->role_id = $request->role_id;
       
        $Users->save();

        $request->session()->flash('flash_message','profile was succesfully added');


       return redirect('admin/users');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return view('admin.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user=User::findOrFail($id);

        $roles =Role::Pluck('name','id')->all();

        return view('admin/edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(usersRequest $request, $id)
    {
        //
        $user =User::findOrFail($id);
        $input=$request->all();
        $user ->update($input);

        return redirect('admin/users');
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
