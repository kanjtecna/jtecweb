<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        DB::enableQueryLog();
        Schema::defaultStringLength(191);
         // $query->sql;
        // $query->bindings;
        // $query->time;
        // $query->connectionName;
        // DB::listen(function ($query) {
        //     Log::info(
        //         $query->sql,
        //         [
        //            'connectionName'=> $query->connectionName,
        //             'bindings' => $query->bindings,
        //             'time' => $query->time
        //         ]
        //     );
        // });
    }
}
