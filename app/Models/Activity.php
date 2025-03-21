<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'title',
        'description',
        'start_time',
        'end_time',
        'is_all_day',
        'type',
    ];

    const PERSONAL = 1;
    const WORK = 2;
    const FAMILY = 3;
    const STUDY = 4;
    const OTHERS = 5;

    const TASK = 1;
    const EVENT = 2;

    const CATEGORY = [
        self::PERSONAL => 'Personal',
        self::WORK => 'Work',
        self::FAMILY => 'Family',
        self::STUDY => 'Study',
        self::OTHERS => 'Others',
    ];

    const TYPES = [
        self::TASK => 'Task',
        self::EVENT => 'Event',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getIsAllDayAttribute($value)
    {
        return $value ? 'Yes' : 'No';
    }

    public function getEventDateAttribute($value)
    {
        return date('d-m-Y', strtotime($value));
    }

    public function getStartTimeAttribute($value)
    {
        return date('H:i', strtotime($value));
    }

    public function getEndTimeAttribute($value)
    {
        return date('H:i', strtotime($value));
    }

    public function getTypeAttribute($value)
    {
        return self::TYPES[$value];
    }
    public function getCategoryAttribute($value)
    {
        return self::CATEGORY[$value];
    }

    public function getCreatedAtAttribute($value)
    {
        return date('d-m-Y H:i', strtotime($value));
    }
}
