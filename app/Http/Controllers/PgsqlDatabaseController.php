<?php

namespace App\Http\Controllers;

use App\Models\PgsqlDatabase;
use Illuminate\Http\Request;

class PgsqlDatabaseController extends Controller
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
        $pgsqlDatabase = new PgsqlDatabase();
        $pgsqlDatabase->name = $request->name;
        $pgsqlDatabase->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(PgsqlDatabase $pgsqlDatabase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PgsqlDatabase $pgsqlDatabase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PgsqlDatabase $pgsqlDatabase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PgsqlDatabase $pgsqlDatabase)
    {
        //
    }
}
