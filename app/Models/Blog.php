<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    
    protected $fillable=['title','description'];// whitelist
    // protected $guarded = [];// blacklist





    public $timestamps = false; //Karna dalam tabel Blog ini kita tidak ada fiel timestampsnya
}
