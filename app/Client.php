<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Client extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','last_name','dni','passport','nationality','age','gender', 
        'address','country','date_birth','date_death','confirm_dead','email',
        'social_networks','telegram','facebook','telephone','phone_number',
        'city_id','dates_keys','registry',
    ];



}
