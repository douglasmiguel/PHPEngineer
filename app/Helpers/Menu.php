<?php

namespace Digined\Helpers;

use Session;

class Menu
{

    public static function active($page)
    {
        $path = app('request')->path();
        if ( ( $path == '/' && $page == 'home' ) || ( str_contains($path, $page) ) ) {
            return 'active';
        }
        return '';
    }

    public static function checkIsCollapsed()
    {
        if(Session::has('menu_collapsed') && Session::get('menu_collapsed')==true) {
            return 'sidebar-collapse';
        }
        return '';
    }

}
