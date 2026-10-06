<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function groups() { 
        return $this->belongsToMany(Group::class); 
    }

    public function material() { 
  return $this->hasOne(Material::class); 
}
}
