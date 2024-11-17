<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerBusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customerBusinesses = CustomerBusiness::all();
        return $this->responseJson($customerBusinesses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customerBusiness = CustomerBusiness::create($request->all());
        return $this->responseJson($customerBusiness);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customerBusiness = CustomerBusiness::create($request->all());
        return $this->responseJson($customerBusiness);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customerBusiness = CustomerBusiness::find($id);
        return $this->responseJson($customerBusiness);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customerBusiness = CustomerBusiness::find($id);
        return $this->responseJson($customerBusiness);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customerBusiness = CustomerBusiness::find($id);
        $customerBusiness->update($request->all());
        return $this->responseJson($customerBusiness);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customerBusiness = CustomerBusiness::find($id);
        $customerBusiness->delete();
        return $this->responseJson(['message' => 'Customer business deleted successfully']);
    }
}
