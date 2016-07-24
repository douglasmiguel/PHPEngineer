<?php

namespace PHPEngineer\Helpers;

use PHPEngineer\Models\ProjectConfig;

class ConfigHelper
{

    public static function load()
    {
        $list = [];
        $configs = ProjectConfig::all();
        foreach($configs as $config)
        {
            $list[$config->name] = $config->value;
        }
        return (object)$list;
    }

}
