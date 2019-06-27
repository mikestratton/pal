<?php

namespace PAL\Http\Controllers;

use PAL\PhotoMemory;
use Illuminate\Http\Request;

class PhotoMemoryController extends Controller
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
        return view('users.public.memorials.create');
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
     * @param  \PAL\PhotoMemory  $photoMemory
     * @return \Illuminate\Http\Response
     */
    public function show(PhotoMemory $photoMemory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \PAL\PhotoMemory  $photoMemory
     * @return \Illuminate\Http\Response
     */
    public function edit(PhotoMemory $photoMemory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \PAL\PhotoMemory  $photoMemory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PhotoMemory $photoMemory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \PAL\PhotoMemory  $photoMemory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhotoMemory $photoMemory)
    {
        //
    }

    public function example(){
        return view('users.public.memorials');
    }
}
