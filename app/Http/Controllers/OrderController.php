<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Http\Requests\CreateOrderRequest;
use App\Http\Requests\EditOrderRequest;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();

        return view('list_order', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_order');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateOrderRequest $request)
    {
        $order = Order::create($request->all());

        if ($order) {
            alert()->success(trans('mes_order.success'), trans('mes_order.suc_add'));
        } else {
            alert()->error(trans('mes_order.fail'), trans('mes_order.ses_createfail'));
        }

        return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);

        return view('edit_order', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditOrderRequest $request, $id)
    {
        $order = Order::findOrFail($id);

        $order->update([
            'order_name' => $request->order_name,
        ]);

        alert()->success(trans('mes_order.success'), trans('mes_order.suc_update'));

        return redirect()->route("order.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
   
        $order->delete();
        alert()->warning(trans('mes_order.success'), trans('mes_order.suc_delete'));

        return back();
    }

    public function back()
    {
        return redirect()->route('order.index');
    }
}
