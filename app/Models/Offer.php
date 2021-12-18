<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = ['price','name','details'];
    protected $hidden = ['created_at','updated_at'];
    
}
