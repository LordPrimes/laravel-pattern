<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employ extends Model
{
    protected $table = 'employees';

    protected $fillable = ['name','male','rang_id'];
}
