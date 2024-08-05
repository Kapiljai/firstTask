<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form1 extends Model
{
    use HasFactory;
    protected $fillable = [
        'form1_field',
        'form2_field',
        'form3_field',
        'form4_field',
        'form5_field',
    ];
}
