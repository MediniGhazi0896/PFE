<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moral extends Model
{
    public $table = 'moral';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

protected $hidden = [
        'id',
		'type|default = moral'
    ];


    protected $fillable =
    [
   		   
   		'name',
        'lastname',
        'nationality',
        'birthdate',
        'NIC',
    	'issued',
    	'in',
    	'address',
    	'phone',
    	'email'
    ];
}
