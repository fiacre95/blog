<?php

namespace App\Http\Controllers;

use App\Models\Cathegory;
use App\Http\Requests\StoreCathegoryRequest;
use App\Http\Requests\UpdateCathegoryRequest;

class CathegoryController extends Controller
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
     * @param  \App\Http\Requests\StoreCathegoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCathegoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cathegory  $cathegory
     * @return \Illuminate\Http\Response
     */
    public function show(Cathegory $cathegory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cathegory  $cathegory
     * @return \Illuminate\Http\Response
     */
    public function edit(Cathegory $cathegory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCathegoryRequest  $request
     * @param  \App\Models\Cathegory  $cathegory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCathegoryRequest $request, Cathegory $cathegory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cathegory  $cathegory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cathegory $cathegory)
    {
        //
    }
}
