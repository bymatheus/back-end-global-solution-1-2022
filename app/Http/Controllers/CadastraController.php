<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CadastraController extends Controller
{
    public function store(): JsonResponse
    {
        return response()->json([
            200
        ]);
    }
}
