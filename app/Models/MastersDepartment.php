<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MastersDepartment extends Model
{
    use HasFactory;

    protected $fillable = [
        'faculty_id',
        'department_name',
        'is_mphil',
        'is_phd',
        ];
}
