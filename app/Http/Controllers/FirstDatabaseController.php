<?php

namespace App\Http\Controllers;

use App\Models\FirstDatabase;
use Illuminate\Http\Request;

class FirstDatabaseController extends Controller
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
    public function store(Request $request)
    {
        $firstDatabase = new FirstDatabase;
        $firstDatabase->name = $request->name;
        $firstDatabase->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(FirstDatabase $firstDatabase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FirstDatabase $firstDatabase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FirstDatabase $firstDatabase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FirstDatabase $firstDatabase)
    {
        //
    }
}
