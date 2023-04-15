<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_id','status','user_id ','resume','video'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
    public function bachelor_faculty()
    {
        return $this->belongsTo('App\Models\Faculty', 'bachelor_faculty_id');
    }
    public function bachelor_department()
    {
        return $this->belongsTo('App\Models\Department', 'bachelor_department_id');
    }
    public function masters_faculty()
    {
        return $this->belongsTo('App\Models\Faculty', 'masters_faculty_id');
    }
    public function masters_department()
    {
        return $this->belongsTo('App\Models\MastersDepartment', 'masters_department_id');
    }
}
