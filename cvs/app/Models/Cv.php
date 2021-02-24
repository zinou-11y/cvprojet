<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Cv extends Model
{
    use HasFactory;
    use softDeletes;

    protected $dates = ['deleted_at'];

public function user(){
    return $this->belongsTo('App\Models\User');
}
public function experiences(){
    return $this->hasMany('App\Models\Experience');
}

}
