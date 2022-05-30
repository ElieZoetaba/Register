<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table='post';
    protected $fillable =[
        'name',
        'born_date',
        'email',
        'contact',
    ];
}
