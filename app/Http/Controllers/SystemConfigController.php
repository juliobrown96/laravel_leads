<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $systemConfigs = SystemConfig::all();
        return $this->responseJson($systemConfigs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $systemConfigs = SystemConfig::all();
        return $this->responseJson($systemConfigs);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $systemConfig = SystemConfig::create($request->all());
        return $this->responseJson($systemConfig);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $systemConfig = SystemConfig::find($id);
        return $this->responseJson($systemConfig);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $systemConfig = SystemConfig::find($id);
        return $this->responseJson($systemConfig);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $systemConfig = SystemConfig::find($id);
        $systemConfig->update($request->all());
        return $this->responseJson($systemConfig);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $systemConfig = SystemConfig::find($id);
        $systemConfig->delete();
        return $this->responseJson(['message' => 'System config deleted successfully']);
    }
}
