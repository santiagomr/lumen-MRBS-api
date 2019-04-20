<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Entry extends Model
{
    protected $table = "mrbs_entry";
    protected $primaryKey = 'id';


    protected $dates = [
        'start_time', 'end_time'
    ];


    public function getDateFormat()
    {
        return 'Y-m-d H:i';
    }

}
