<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corp extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =
    [
        'name',
        'activity_sector',
        'category',
        'criticality_class',
        'type'
    ];
    }
