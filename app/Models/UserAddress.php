<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = "user_addresses";
    protected $primaryKey = 'id';
    protected $fillable = ['user_id' , 'country' , 'city' , 'state' , 'full_address' , 'zipcode'];


    public function users()
    {
        return $this->belongsTo(User::class , 'user_id' , 'id');
        // user_id foreginId ,Id PrimaryKey of users table
    }
}
