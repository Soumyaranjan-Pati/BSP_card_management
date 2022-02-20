<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class CardManagement extends Model
{
    //use HasFactory;
     protected $table='card_management_details';
      protected $fillable = [
        'id', 'name', 'contacts','email', 'description', 'address'
    ];

    protected $hidden = [
        'created_at','updated_at'
    ];
}