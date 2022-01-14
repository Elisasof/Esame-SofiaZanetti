<?php

namespace App\Http\Controllers;

use App\Models\Terreni; 
use Illuminate\Http\Request;

class TerreniController extends Controller
{ 
    public function list() { 
        return Terreni::all(); 
    } 
 
    public function detail($id) { 
        $table = Terreni::where('id', $id)->first(); 
        return $table; 
    } 
 
    public function create(Request $request) { 
        $newTerreniData = json_decode($request->getContent()); 
 
        $table = new Terreni(); 
 
        $table->comune = $newTerreniData->comune; 
        $table->foto = $newTerreniData->foto; 
        $table->ettari = $newTerreniData->ettari; 
        $table->fogliocatasto = $newTerreniData->fogliocatasto; 
        $table->mappacatasto = $newTerreniData->mappacatasto; 
        $table->parcellacatasto = $newTerreniData->parcellacatasto; 
        $table->terreno = $newTerreniData->terreno; 
        $table->irrigazione = $newTerreniData->irrigazione; 
        $table->offerta = $newTerreniData->offerta; 
        $table->canoneofferta = $newTerreniData->canoneofferta; 
        $table->disponibilita = $newTerreniData->disponibilita; 
        $table->save(); 
        return response()->json($table, 201); 
    } 
 
    public function edit(Request $request, $id) { 
        $table = Terreni::find($id); 
 
        $newTerreniData = json_decode($request->getContent()); 
 
        $table->comune = $newTerreniData->comune; 
        $table->foto = $newTerreniData->foto; 
        $table->dimensione = $newTerreniData->dimensione; 
        $table->fogliocatasto = $newTerreniData->fogliocatasto; 
        $table->mappacatasto = $newTerreniData->mappacatasto; 
        $table->parcellacatasto = $newTerreniData->parcellacatasto; 
        $table->terreno = $newTerreniData->terreno; 
        $table->irrigazione = $newTerreniData->irrigazione; 
        $table->offerta = $newTerreniData->offerta; 
        $table->canoneofferta = $newTerreniData->canoneofferta; 
        $table->disponibilita = $newTerreniData->disponibilita; 
 
        $table->save(); 
        return response()->json($table, 200); 
    } 
 
    public function delete($id) { 
        $table = Terreni::where('id', $id)->delete(); 
 
        return $table; 
    } 
}