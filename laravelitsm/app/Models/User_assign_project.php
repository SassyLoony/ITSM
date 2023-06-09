<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_assign_project extends Model
{
    use HasFactory;
    protected $fillable =[
        "user_name",
        "email",
        "project_code",
        "project_name",
    ];
}
