<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'title',
        'company',
        'logo',
        'last_date',
        'job_id',
        'description',
        'short_description',
        'job_id',
        'job_id',
    ]; 
    //     public function company()
    // {
    //     return $this->belongsTo('App\Company','company_id');
    // }
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function com_name(){
        return $this->belongsTo('App\Models\Company','company');
    }
}
