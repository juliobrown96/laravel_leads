<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected function responseJson($data)
    {
        return response()->json($data);
    }
}
