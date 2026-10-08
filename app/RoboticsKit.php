<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoboticsKit extends Model
{
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'robotics_kit_id';

    /**
     * The table migration does not define created_at or updated_at columns.
     *
     * @var bool
     */
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];

    public function courses()
    {
        return $this->hasMany(
            Course::class,
            'robotics_kit_id',
            'robotics_kit_id'
        );
    }
}
