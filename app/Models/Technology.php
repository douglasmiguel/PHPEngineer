<?php

namespace PHPEngineer\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Technology extends Model
{

    use SoftDeletes;

    protected $table = 'technology';
    protected $dates = ['deleted_at'];

}
