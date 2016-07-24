<?php

namespace PHPEngineer\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {
        class_alias('PHPEngineer\Helpers\MenuHelper', 'Menu');
    }

    public function register()
    {
        //
    }

}
