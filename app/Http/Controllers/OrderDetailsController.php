<?php

namespace App\Http\Controllers;

use App\Models\order_details;
use App\Http\Requests\Storeorder_detailsRequest;
use App\Http\Requests\Updateorder_detailsRequest;

class OrderDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order_details=order_details::all();
        return $order_details;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storeorder_detailsRequest $request)
    {
        $order_details=new order_details;
        $order_details->order_id=$request->order_id;
        $order_details->menu_id=$request->menu_id;
        $order_details->quantity=$request->quantity;
    }

    /**
     * Display the specified resource.
     */
    public function show(order_details $order_details)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order_details $order_details)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateorder_detailsRequest $request, order_details $order_details)
    {
        $order_details=order_details::find($request->id);

        $order_details->order_id=$request->order_id;
        $order_details->menu_id=$request->menu_id;
        $order_details->quantity=$request->quantity;
        $order_details->save();
        return $order_details;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(order_details $order_details)
    {
        //
    }
}
