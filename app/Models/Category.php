<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function industry(){
        return $this->belongsTo(Industry::class);
    }

    public function company(){
        return $this->hasMany(Company::class);
    }
}
