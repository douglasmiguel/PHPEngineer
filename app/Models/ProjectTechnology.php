<?php

namespace PHPEngineer\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectTechnology extends Model
{

    protected $table = 'project_technology';

    public function technology()
    {
        return $this->hasOne('PHPEngineer\Models\Technology', 'id', 'technology_id')->select('id', 'technology');
    }

}
