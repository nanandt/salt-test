<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topup extends Model
{
    protected $table = 'topups';

    protected $fillable = ['mobile_number', 'value'];
}
