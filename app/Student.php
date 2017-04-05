<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    public $timestamps = true;

    protected function getDataFormat()
    {
        return time();
    }

    protected function asDataTime($val)
    {
        return $val;
    }
}
