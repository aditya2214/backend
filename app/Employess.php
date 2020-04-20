<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employess extends Model
{
    protected $table ='employess';

    protected $fillable =[
        'nama','birthplace','birthday',
    ];
}
