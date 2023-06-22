<?php

namespace App\Http\Controllers;

use App\Models\MongoDatabase;
use Illuminate\Http\Request;

class MongoDatabaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = MongoDatabase::orderBy('_id', 'DESC')->first();
        return response()->json(['data' => $data]);
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
        $mongoDatabase = new MongoDatabase;
        $mongoDatabase->name = $request->name;
        $mongoDatabase->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(MongoDatabase $mongoDatabase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MongoDatabase $mongoDatabase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MongoDatabase $mongoDatabase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MongoDatabase $mongoDatabase)
    {
        //
    }
}
