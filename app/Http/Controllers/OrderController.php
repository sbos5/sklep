<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $order=Order::all();
        return $order->toJson();
    }
     
    public function show($id)
    {
        $order=Order::findOrFail($id);
        return $order->toJson();
        
    }
    public function updade(Request $request , $id)
    {
        $order=Order::findOrFail($id);
        $order->client_id=$request->input('client_id');
        $order->produkt_id=$request->input('produkt_id');
        $order->save();
        return "rekord updated";
    }
    public function store(Request $request )
    {
        $order=new Order();
        $order->client_id=$request->input('client_id');
        $order->produkt_id=$request->input('produkt_id');
        $order->save();
        return "rekord created";
    }
    public function delete($id)
    {
        $order=Order::findOrFail($id);
        $order->delete();
        return "rekord deleted";
        
        
    }
}
