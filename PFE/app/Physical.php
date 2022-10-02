<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Physical extends Model
{
    public $table = 'physical';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

protected $hidden = [
        'id',
		'type|default = physical'
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