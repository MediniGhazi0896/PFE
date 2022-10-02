<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    public $table = 'audits';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

protected $hidden = [
        'id'
    ];


    protected $fillable =
    [
   		'person_type',    
   		'Name',
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
