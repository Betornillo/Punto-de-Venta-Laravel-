<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Venta;

class VentasViewController extends Controller
{
    public function index(){
    $ventas = Venta::all();
    return View::make("ventas", array('ventas' => $ventas));
    }
}
