<?php

namespace Digined\Http\Controllers;

use View;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Digined\Models\ProjectConfig;

class Controller extends BaseController
{

    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        View::share('config', $this->loadConfig());
    }

    private function loadConfig()
    {
        $list = [];
        $configs = ProjectConfig::all();
        foreach($configs as $config)
        {
            $list[$config->name] = $config->value;
        }
        return (object)$list;
    }

    protected function getMessage($type, $text, $e=null)
    {
        switch ($type) {
            case 'success':
                $message = [
                    'title' => 'OK',
                    'text'  => $text,
                    'type'  => 'success',
                ];
                break;
            default:
                $message = [
                    'title' => 'Error',
                    'text'  => 'Error: '.$e->getMessage().' - Line: '.$e->getLine(),
                    'type'  => 'danger',
                ];
                break;
        }
        return $message;
    }

}
