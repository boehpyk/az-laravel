<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $guarded = [
        'is_publish',
        'date_begin',
        'date_end',
        'cover',
        'tickets_url',
    ];

    /**
     * @var array
     */
    protected $fillable = [
        'city',
        'info',
        'club_name',
        'club_url',
        'meeting_url',
        'description',
        'button_label'
    ];

    /**
     * The date are automatically converted into Carbon format
     * @var array
     */
    protected $dates = ['date_begin', 'date_end'];

    /**
     * gets russian month of given date
     * @param $value
     * @return string
     */
    public function getDateBeginRussianMonthAttribute()
    {
        $months = ['янв', 'фев', 'мар', 'апр', 'май', 'июн', 'июл', 'авг', 'сен', 'окт', 'ноя', 'дек'];
        $month_num = (\Carbon\Carbon::parse($this->date_begin)->format('n') - 1);

        return $months[$month_num];
    }

}
