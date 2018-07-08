<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Boletos;

class EventosViewController extends Controller
{



  public function index(){
    $boletos = Boletos::all();
    return View::make("eventos", array('boletos' => $boletos));
    }



}
