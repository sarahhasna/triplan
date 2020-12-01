<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thingstodo extends Model
{
    //use HasFactory;
    //protected $fillable = ['name'];

    public function packages(){
        return $this->belongsToMany(packages::class);
    }
}
