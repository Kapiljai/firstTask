<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValiDationScript extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','video'];
    protected $table = 'table_validation_script_video';
}
