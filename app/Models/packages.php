<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class packages extends Model
{
    //use HasFactory;
    public function thingstodos(){
        $this->hasMany(thingstodo::class);
    }

    public function countTodos()
    {
        return $this->hasMany(thingstodo::class, 'Packages', 'idPackages');
    }
}

