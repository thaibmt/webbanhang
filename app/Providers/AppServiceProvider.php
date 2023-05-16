<?php

namespace App\Providers;

use DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('home', function ($view) {
            $productCount = DB::table('product')->whereDeleted(false)->count();
            $usersCount = DB::table('users')->whereDeleted(false)->count();
            $ordersCount = DB::table('orders')->count();
            $newsCount = DB::table('news')->whereDeleted(false)->count();
            // tong doanh thu
            $orders = DB::table('orders')->whereStatus(true)->get();
            $totalBenefit = 0;
            foreach ($orders as $order) {
                $totalBenefit += $order->total_money;
            }
            // 5 don hang moi
            $newOrders = DB::table('orders')->whereStatus(false)->orderBy('order_date', 'DESC')->limit(5)->get();
            // thong ke don hang theo trang thai
            $countOrderByStatus = [
                'new' => DB::table('orders')->whereStatus(false)->count(),
                'completed' => DB::table('orders')->whereStatus(true)->count(),
                'cancelled' => DB::table('orders')->whereStatus(2)->count(),
            ];
            $data = [
                'productCount' => $productCount,
                'usersCount' => $usersCount,
                'ordersCount' => $ordersCount,
                'newsCount' => $newsCount,
                'newOrders' => $newOrders,
                'totalBenefit' => $totalBenefit,
                'countOrderByStatus' => $countOrderByStatus,
            ];
            $view->with($data);
        });
    }
}
