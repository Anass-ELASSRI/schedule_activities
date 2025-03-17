<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecurrenceRule extends Model
{
    protected $fillable = [
        'activity_id',
        'frequency',
        'interval',
        'rule',
        'occurrences',
        'end_date',
    ];

    const DAILY = 1;
    const WEEKLY = 2;
    const MONTHLY = 3;
    const YEARLY = 4;
    const PERIOD = 5;
    const PERIODS = 6;

    const FREQUENCY = [
        self::DAILY => 'Daily',
        self::WEEKLY => 'Weekly',
        self::MONTHLY => 'Monthly',
        self::YEARLY => 'Yearly',
        self::PERIOD => 'Period',
        self::PERIODS => 'Periods',
    ];

    const TASK = 1;
    const EVENT = 2;

    const CATEGORIES = [
        self::TASK => 'Task',
        self::EVENT => 'Event',
    ];

    const WEEKDAYS = [
        'su' => 'Sunday',
        'mo' => 'Monday',
        'tu' => 'Tuesday',
        'we' => 'Wednesday',
        'th' => 'Thursday',
        'fr' => 'Friday',
        'sa' => 'Saturday',
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
