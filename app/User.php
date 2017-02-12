<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'status',
        'type',
        'email',
        'username',
        'fund',
        'withdrawn_profits',
        'profits',
        'pay',
        'work_days',
        'work_region',
        'bank_code',
        'bank_account',
        'reception',
        'picture_image',
        'realname',
        'rrn',
        'main_contact_number',
        'sub_contact_number',
        'addr',
        'location',
        'age',
        'career',
        'description',
        'device',
        'cloud_message_id',
        'social_account_type',
        'social_account_id',
        'mobile_conn_id',
        'mobile_dupl_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'token',
    ];


    public function rates () {
        return $this->hasMany('App\Rate', 'sitter_id', 'id');
    }

    public function locations () {
        return $this->hasOne('App\Location', 'id', 'location');
    }



}
