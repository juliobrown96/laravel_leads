<?php

namespace App\Models\Business;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = [
        'name',
        'document',
        'postal_code',
        'phone',
        'email',
        'website',
        'status',
    ];

    public function customerBusinesses()
    {
        return $this->hasMany(CustomerBusiness::class);
    }

    public function customerBusinessObservations()
    {
        return $this->hasMany(CustomerBusinessObservation::class);
    }

    public function businessContracts()
    {
        return $this->hasMany(BusinessContract::class);
    }

    public function businessContractGeolocations()
    {
        return $this->hasMany(BusinessContractGeolocation::class);
    }

    public function geolocationCaches()
    {
        return $this->hasMany(GeolocationCache::class);
    }

    public function parameterTypes()
    {
        return $this->hasMany(ParameterType::class);
    }

    public function appParameters()
    {
        return $this->hasMany(AppParameter::class);
    }

    public function systemConfigs()
    {
        return $this->hasMany(SystemConfig::class);
    }

    public function contractPayments()
    {
        return $this->hasMany(ContractPayment::class);
    }

    public function customerBusinessWarranties()
    {
        return $this->hasMany(CustomerBusinessWarranty::class);
    }


}


