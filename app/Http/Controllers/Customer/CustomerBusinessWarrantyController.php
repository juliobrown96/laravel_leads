<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerBusinessWarrantyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customerBusinessWarranties = CustomerBusinessWarranty::all();
        return $this->responseJson($customerBusinessWarranties);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customerBusinessWarranties = CustomerBusinessWarranty::all();
        return $this->responseJson($customerBusinessWarranties);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customerBusinessWarranty = CustomerBusinessWarranty::create($request->all());
        return $this->responseJson($customerBusinessWarranty);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customerBusinessWarranty = CustomerBusinessWarranty::find($id);
        return $this->responseJson($customerBusinessWarranty);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customerBusinessWarranty = CustomerBusinessWarranty::find($id);
        return $this->responseJson($customerBusinessWarranty);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customerBusinessWarranty = CustomerBusinessWarranty::find($id);
        $customerBusinessWarranty->update($request->all());
        return $this->responseJson($customerBusinessWarranty);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customerBusinessWarranty = CustomerBusinessWarranty::find($id);
        $customerBusinessWarranty->delete();
        return $this->responseJson(['message' => 'Customer business warranty deleted successfully']);
    }
}
