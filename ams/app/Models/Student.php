<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $filable = [
        'email',
        'firstName',
        'middleName',
        'lastName',
        'gender',
        'age',
        'guardian',
        'guardianContact',
        'apiKey',
        'absences'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    
}
