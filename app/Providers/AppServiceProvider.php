<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;

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
        view()->composer('home', function($view){
            $productCount = DB::table('product')->whereDeleted(false)->count();
            $usersCount = DB::table('users')->whereDeleted(false)->count();
            $ordersCount = DB::table('orders')->count();
            $newsCount = DB::table('news')->whereDeleted(false)->count();
            $data = [
                'productCount' => $productCount,
                'usersCount' => $usersCount,
                'ordersCount' => $ordersCount,
                'newsCount' => $newsCount
            ];
            $view->with($data);
        });
    }
}
