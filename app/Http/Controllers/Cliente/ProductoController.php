<?php

namespace App\Http\Controllers\Cliente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ViewModel\ProductoViewModel;

class ProductoController extends Controller
{
    public function index(ProductoViewModel $ProductoViewModel){
        $productos = $ProductoViewModel->ProductosParaVenta();
        return view('Cliente.productos',compact('productos'));
    }

    public function show($id, ProductoViewModel $ProductoViewModel){
        $producto = $ProductoViewModel->getProducto($id);
        $productos = $ProductoViewModel->otrosProductosParaVenta($id);
        return view('Cliente.producto-detallado',compact('producto','productos'));
    }
}
