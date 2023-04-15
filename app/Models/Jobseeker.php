<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobseeker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','address','city','cell',
        'email', 'status', 'category','experience',
        'work_home','device','internet',
        'resume','skill','trix','university','club','description','last',
        'major','video',
        'bachelor_status',
        'bachelor_subject',
        'bachelor_result',
        'bachelor_year',
        'bachelor_institute',
        'masters_status',
        'masters_subject',
        'masters_result',
        'masters_year',
        'masters_institute',
        'industry',
        'masters_result',
        'bachelor_status',
        'certificate',
        'bachelor_faculty_id',
        'bachelor_department_id',
        'masters_faculty_id',
        'masters_department_id'

   ];
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
