<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecurrenceRule extends Model
{
    protected $fillable = [
        'activity_id',
        'rule',
    ];

    const SECONDLY = 'RRule.SECONDLY';
    const MINUTELY = 'RRule.MINUTELY';
    const HOURLY = 'RRule.HOURLY';
    const DAILY = 'RRule.DAILY';
    const WEEKLY = 'RRule.WEEKLY';
    const MONTHLY = 'RRule.MONTHLY';
    const YEARLY = 'RRule.YEARLY';

    
    const FREQUENCY = [
        self::DAILY => 'Daily',
        self::WEEKLY => 'Weekly',
        self::MONTHLY => 'Monthly',
        self::YEARLY => 'Yearly',
    ];

    const TASK = 1;
    const EVENT = 2;

    const CATEGORIES = [
        self::TASK => 'Task',
        self::EVENT => 'Event',
    ];

    const WEEKDAYS = [
        'RRule.SU' => 'Sunday',
        'RRule0.MO' => 'Monday',
        'RRule0.TU' => 'Tuesday',
        'RRule0.WE' => 'Wednesday',
        'RRule0.TH' => 'Thursday',
        'RRule0.FR' => 'Friday',
        'RRule0.SA' => 'Saturday',
    ];

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    public function getFrequencyAttribute($value)
    {
        return self::FREQUENCY[$value];
    }

    public function getRuleAttribute($value)
    {
        return json_decode($value);
    }

    public function setRuleAttribute($value)
    {
        $this->attributes['rule'] = json_encode($value);
    }
}
