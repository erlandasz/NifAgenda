<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presenter extends Model
{
    protected $fillable = [
        'name', 'profile', 'logo', 'management', 'pipeline', 'address', 'website', 'email', 'phone', 'type', 'ticker', 'sector', 'founded'
    ];
}
