<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
       $client=Client::all();
       return $client->toJson();
    }
     
    public function show($id)
    {
        $client= Client  ::findOrFail($id); 
        return $client->toJson(); 
    }
    public function updade(Request $request ,$id)
    {
        $client= Client  ::findOrFail($id);
        $client->name=$request->input('name');
        $client->surname=$request->input('surname');
        $client->city=$request->input('city');
        $client->save();
        return "rekord update";   
    } 
    public function store(Request $request )
    {
        $client=new Client();
        $client->name=$request->input('name');
        $client->surname=$request->input('surname');
        $client->city=$request->input('city');
        $client->save();
        return "rekord utworzony";  

        
    } 
    public function delete($id)
    {
        $client= Client::findOrFail($id);
        $client->delete();
        return "rekord deleted"; 
    }
}
