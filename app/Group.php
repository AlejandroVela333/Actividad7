<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'group_id';

    /**
     * The table migration does not define created_at or updated_at columns.
     *
     * @var bool
     */
    public $timestamps = false;

    public function users()
    {
        return $this->hasMany(User::class, 'group_id', 'group_id');
    }

    public function courses()
    {
        return $this->belongsToMany(
            Course::class,
            'course_group',
            'group_id',
            'course_id',
            'group_id',
            'id'
        );
    }
}
