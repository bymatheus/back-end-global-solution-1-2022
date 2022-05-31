<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ListaController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            200
        ]);
    }
}
