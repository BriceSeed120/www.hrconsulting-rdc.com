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
            $globalMenu =  Menu::all()->where("is_top_menu",0)->sortBy('menu_order');
            $globalTopMenu =  Menu::all()->where("is_top_menu",1)->sortBy('menu_order');
            return $view->with('globalMenu', $globalMenu)->with("globalTopMenu",$globalTopMenu);
        });
    }
}
