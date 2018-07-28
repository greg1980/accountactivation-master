<?php

namespace App\Http\Controllers;

use App\Teller;
use Illuminate\Http\Request;
use App\Http\Requests\tellerRequest;


class TellerController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teller  $teller
     * @return \Illuminate\Http\Response
     */
    public function show(Teller $teller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teller  $teller
     * @return \Illuminate\Http\Response
     */
    public function edit(Teller $teller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teller  $teller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teller $teller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teller  $teller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teller $teller)
    {
        //
    }
}
