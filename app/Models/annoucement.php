<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class annoucement extends Model
{
    use HasFactory;
    protected $fillable = ['annoucement_id','annoucement_title','annoucement_details','annoucement_type'];
}
