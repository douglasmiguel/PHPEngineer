<?php

namespace PHPEngineer\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectImage extends Model
{

    use SoftDeletes;

    protected $table = 'project_image';
    protected $dates = ['deleted_at'];

}
