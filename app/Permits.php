<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permits extends Model
{

    protected $dates = ['deleted_at'];

    protected $guarded = [];
}
