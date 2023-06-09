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
        'salary',
        'job_link',
        'description',
        'short_description',
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
