<?php

namespace App\Providers;

use App\Models\Pagina;
use App\Models\Servico;
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
        view()->composer('site.*', function ($view) {
            $menus = Servico::orderby('id','ASC')->get();
            $view->with('menus', $menus);

            $slides = Servico::where('slide','!=','')->get();
            $view->with('slides', $slides);
        });
    }
}
