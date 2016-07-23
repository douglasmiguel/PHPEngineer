<?php

namespace PHPEngineer\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectConfig extends Model
{

    use SoftDeletes;
    protected $table = 'config';
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name',
        'value',
    ];

}
