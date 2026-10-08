<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    /**
     * The table migration does not define created_at or updated_at columns.
     *
     * @var bool
     */
    public $timestamps = false;

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
