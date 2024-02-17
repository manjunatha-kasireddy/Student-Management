<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'teachers';   
    protected $fillable  = ['name' , 'address' , 'mobile'];
    use HasFactory;
}
