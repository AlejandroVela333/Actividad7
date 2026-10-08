<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /**
     * The table migration does not define created_at or updated_at columns.
     *
     * @var bool
     */
    public $timestamps = false;

    public function groups()
    {
        return $this->belongsToMany(
            Group::class,
            'course_group',
            'course_id',
            'group_id',
            'id',
            'group_id'
        );
    }

    public function roboticsKit()
    {
        return $this->belongsTo(
            RoboticsKit::class,
            'robotics_kit_id',
            'robotics_kit_id'
        );
    }

    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}
