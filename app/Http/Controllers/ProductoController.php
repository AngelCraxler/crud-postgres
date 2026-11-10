<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\JsonResponse;

class ProductoController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Producto::latest()->get());
    }

    public function storePrueba(): JsonResponse
    {
        $producto = Producto::create([
            'nombre' => 'Teclado mecánico',
            'precio' => 899.90,
            'stock' => 15,
        ]);

        return response()->json($producto, 201);
    }
}