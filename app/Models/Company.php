<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [ 
  
        'user_id',
        'name',
        'logo',
        'location',
        'slug', 
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}