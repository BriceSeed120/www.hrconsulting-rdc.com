<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use App\Support\Collection;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function($view){
            $globalMenu =  Menu::orderBy('menu_order','asc')->get();
             $globalTopMenu =   Menu::where("is_top_menu",1)->orderBy('menu_order','asc')->get();
            return $view->with('globalMenu', $globalMenu)->with("globalTopMenu",$globalTopMenu);
        });
    }
}
