<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeaccess_levelRequest;
use App\Http\Requests\Updateaccess_levelRequest;
use App\Models\access_level;

class AccessLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storeaccess_levelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(access_level $access_level)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(access_level $access_level)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateaccess_levelRequest $request, access_level $access_level)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(access_level $access_level)
    {
        //
    }
}
