<?php

namespace App\Http\Controllers;
use App\Models\Produkt;
use Illuminate\Http\Request;

class ProduktController extends Controller
{
    public function index()
    {
        $produkt= Produkt::all();
        return $produkt->toJson();
    }
     
    public function show($id)
    {
        $produkt= Produkt::findOrFail($id); 
        return $produkt->toJson();
    }
    public function store(Request $request)
    {
        $produkt=new Produkt();
        $produkt->name=$request->input('name');
        $produkt->praice=$request->input('praice');
        $produkt->many=$request->input('many');
        $produkt->save();
        return "rekord wstawiony";


    }
    public function update(Request $request , $id)
    {
        $produkt= Produkt::findOrFail($id);
        $produkt->name=$request->input('name');
        $produkt->praice=$request->input('praice');
        $produkt->many=$request->input('many');
        $produkt->save();
        return "rekord update";
        
    }
    public function delete($id)
    {
        $produkt= Produkt::findOrFail($id);
        $produkt->delete();
        return "rekord update";

        
    }
}
