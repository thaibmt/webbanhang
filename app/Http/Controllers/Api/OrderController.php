<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Models\Orders;
use DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Orders::all();
        return $this->sendResponse(OrderResource::collection($orders), 'Orders retrieved successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Orders::find($id);

        if (is_null($order)) {
            return $this->sendError('Order not found.');
        }

        DB::table('order_details')
            ->leftJoin('product', 'product.id', '=', 'order_details.product_id')
            ->where('order_details.order_id', $id)
            ->select('order_details.*', 'product.title', 'product.thumbnail')
            ->first();
        return $this->sendResponse(new OrderResource($order), 'Order retrieved successfully.');
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
        $order = Orders::find($id);

        if (is_null($order)) {
            return $this->sendError('Order not found.');
        }

        $order->update($request->all());

        return $this->sendResponse(new OrderResource($order), 'Order updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Orders::find($id);

        if (is_null($order)) {
            return $this->sendError('Order not found.');
        }

        $order->delete();

        return $this->sendResponse([], 'Order deleted successfully.');
    }

    /**
     * Search resource from storage.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $s = $request->s;
        $orders = DB::table('orders')
            ->orWhere('fullname', 'LIKE', "%$s%")
            ->orWhere('email', 'LIKE', "%$s%")
            ->orderBy('status', 'asc')
            ->orderBy('order_date', 'desc')
            ->paginate(10);
        return $this->sendResponse(OrderResource::collection($orders), 'Order search successfully.');
    }
}
