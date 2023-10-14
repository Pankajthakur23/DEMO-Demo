<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $primaryKey='Id';
    public $timestamps=false;
    protected $fillable=['name','gender','age','designation'];

}
