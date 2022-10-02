<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =
    [
        'created_at','updated_at','completed', 'year'
    ];

    public function reportMesuresOrg(){
        return $this->hasOne('App\ReportMesuresOrg');
    }
    
    public function reportMesuresPhy(){
        return $this->hasOne('App\ReportMesuresPhy');
    }
    
    public function reportMesuresTech(){
        return $this->hasOne('App\ReportMesuresTech');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
