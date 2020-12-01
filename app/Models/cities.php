<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cities extends Model
{
    //use HasFactory;
    public function thingstodos(){
        $this->hasMany(thingstodo::class);
    }
    public function countTodos()
    {
        return $this->hasMany(thingstodo::class, 'Cities', 'idCities');
    }
}
