<?php

namespace App\Http\Controllers\Geolocation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusinessContractGeolocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $businessContracts = BusinessContract::all();
        return response()->json($businessContracts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->json($businessContracts);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $businessContract = BusinessContract::create($request->all());
        return response()->json($businessContract);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $businessContract = BusinessContract::find($id);
        return response()->json($businessContract);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $businessContract = BusinessContract::find($id);
        return response()->json($businessContract);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $businessContract = BusinessContract::find($id);
        $businessContract->update($request->all());
        return response()->json($businessContract);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $businessContract = BusinessContract::find($id);
        $businessContract->delete();
        return response()->json(['message' => 'Business contract deleted successfully']);
    }
}
