<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, Card $cards)
    {
        $product = Card::where('user_id', Auth::user()->id)->get();
        
        // $product = Product::where('product_id', Auth::user()->id)->get();
        // dd($product[0]->name);
        $order = Order::create([
            'user_id' => Auth::id(),
            'invoice_number' => date('y-m-d') . '-' . time()."sadas",
            'shipping_address' => $request->shipping_address,
            'status' => $request->status,
        ]);

        foreach ($product as $pro) {
       

        $order->orderDetals()->create([
            'user_id' => Auth::id(),
            'product_id' => $pro->product_id,
            // 'product_title' => $pro->product_id->products?->name,
            'product_title' =>"saas",
            'unit_price' => $request->unit_price,
                 
            'quantity' => '4',
            'total_price' => '54765',
        ]);
    }

    return view('forntend.thankyou');
        // return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
