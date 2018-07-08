<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Boletos;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Boletos::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $boletos = new Boletos();
	$boletos->nombree = Input::get("nombree");
	$boletos->fechae = Input::get("fechae");
	$boletos->costoe = Input::get("costoe");
	$boletos->tipoe = Input::get("tipoe");
	$boletos->save();
	return response()->json([
	"response" => "Guardado"
	],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $boletos = Boletos::where("nombree", $id)->get();
	return $boletos;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return response()->json([
	"response" => "Enabled"
	],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $boletos = Boletos::where("nombre", $id)->first();
	$boletos->enabled = Input::get("enabled");
	$boletos->save();
	return response()->json([
	"response" => "Updated"
	], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
        \App\Boletos::destroy($id);
	return response()->json([
	"response" => "Deleted"
	], 200);
    }
}
