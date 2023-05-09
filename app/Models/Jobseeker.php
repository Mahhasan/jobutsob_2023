<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobseeker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'cell',
        'bachelor_faculty_id',
        'bachelor_department_id',
        'bachelor_status',
        'bachelor_result',
        'bachelor_year',
        'bachelor_institute',
        'masters_faculty_id',
        'masters_department_id',
        'masters_status',
        'masters_result',
        'masters_year',
        'masters_institute',
        'experience',
        'video',
        'resume',
        'trix',
        'address',
        'skill',
        'industry',
        'jobseeker_type',
        'status',

   ];

   public function user()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
   public function jobseekers_status()
   {
       return $this->belongsTo('App\Models\Apply', 'user_id');
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
   // public function bachelor_faculty_name()
   // {
   //     return $this->belongsTo(Faculty::class);
   // }
}
