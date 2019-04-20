<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Repetition extends Model
{
    protected $table = "mrbs_repeat";

    protected $dates = [
        'start_time', 'end_time', 'end_date'
    ];


    public function getDateFormat()
    {
        return 'Y-m-d H:i';
    }

}
