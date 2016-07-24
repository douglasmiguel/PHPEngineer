<?php

namespace PHPEngineer\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{

    use SoftDeletes;
    protected $table = 'project';
    protected $dates = ['deleted_at'];

    public function scopeInfo($query)
    {
        return $query->with('technologies', 'technologies.technology', 'images');
    }

    public function images()
    {
        return $this->hasMany('PHPEngineer\Models\ProjectImage')->select('id', 'project_id', 'image', 'description');
    }

    public function technologies()
    {
        return $this->hasMany('PHPEngineer\Models\ProjectTechnology')->select('project_id', 'technology_id');
    }

}
