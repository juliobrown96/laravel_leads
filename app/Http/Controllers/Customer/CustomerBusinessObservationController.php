<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerBusinessObservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customerBusinessObservations = CustomerBusinessObservation::all();
        return $this->responseJson($customerBusinessObservations);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customerBusinessObservation = CustomerBusinessObservation::create($request->all());
        return $this->responseJson($customerBusinessObservation);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $customerBusinessObservation = CustomerBusinessObservation::create($request->all());
        return $this->responseJson($customerBusinessObservation);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customerBusinessObservation = CustomerBusinessObservation::find($id);
        return $this->responseJson($customerBusinessObservation);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customerBusinessObservation = CustomerBusinessObservation::find($id);
        return $this->responseJson($customerBusinessObservation);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customerBusinessObservation = CustomerBusinessObservation::find($id);
        $customerBusinessObservation->update($request->all());
        return $this->responseJson($customerBusinessObservation);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customerBusinessObservation = CustomerBusinessObservation::find($id);
        $customerBusinessObservation->delete();
        return $this->responseJson(['message' => 'Customer business observation deleted successfully']);
    }
}
