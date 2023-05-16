<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController as BaseController;
use App\Http\Resources\OrderResource;
use App\Models\Orders;
use App\Models\Product;

class StatisticalController extends BaseController
{
    /**
     * Tổng doanh thu.
     *
     * @param
     * @return \Illuminate\Http\Response
     */
    public function totalBenefit()
    {
        $orders = Orders::whereStatus(true)->get();
        $data = 0;
        foreach ($orders as $order) {
            $data += $order->total_money;
        }
        return $this->sendResponse($data, 'Total benefit retrieved successfully.');
    }

    /**
     * Tổng đơn hàng
     *
     * @param
     * @return \Illuminate\Http\Response
     */
    public function totalOrder()
    {
        $data = Orders::count();
        return $this->sendResponse($data, 'Total order retrieved successfully.');
    }

    /**
     * Tổng sản phẩm
     *
     * @param
     * @return \Illuminate\Http\Response
     */
    public function totalProduct()
    {
        $data = Product::count();
        return $this->sendResponse($data, 'Total product retrieved successfully.');
    }

    /**
     * Thống kê đơn hàng
     *
     * @param   string $status
     * @return \Illuminate\Http\Response
     */
    public function getOrder($status = null)
    {
        if (!in_array($status, ['new', 'approved', 'cancelled'])) {
            return $this->sendError('Status not found.');
        }

        $data = match ($status) {
            'new' => Orders::whereStatus(false)->count(),
            'approved ' => Orders::whereStatus(true)->count(),
            default => Orders::whereStatus(2)->count(),
        };

        return $this->sendResponse($data, 'Total order retrieved successfully.');
    }

    // lấy số đơn hàng mới
    public function getNewOrder($limit = 5)
    {
        if (!is_numeric($limit) || $limit <= 0) {
            $limit = 5;
        }
        $orders = Orders::whereStatus(false)->limit($limit)->get();
        return $this->sendResponse(OrderResource::collection($orders), 'New orders retrieved successfully.');
    }
}
