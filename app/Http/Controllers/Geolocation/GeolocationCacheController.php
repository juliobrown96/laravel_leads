<?php

namespace App\Http\Controllers\Geolocation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeolocationCacheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $geolocationCaches = GeolocationCache::all();
        return response()->json($geolocationCaches);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->json($geolocationCaches);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $geolocationCache = GeolocationCache::create($request->all());
        return response()->json($geolocationCache);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $geolocationCache = GeolocationCache::find($id);
        return response()->json($geolocationCache);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $geolocationCache = GeolocationCache::find($id);
        return response()->json($geolocationCache);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $geolocationCache = GeolocationCache::find($id);
        $geolocationCache->update($request->all());
        return response()->json($geolocationCache);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $geolocationCache = GeolocationCache::find($id);
        $geolocationCache->delete();
        return response()->json(['message' => 'Geolocation cache deleted successfully']);
    }
}
