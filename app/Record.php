<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $table = 'event_records';
    protected $primaryKey ='event_Id';
    public $timestamps = true;
    protected $fillable = [ 'eventName', 'eventLocation', 'vipSeatsAvailable', 'vipPrice', 'regularSeatsAvailable','regularPrice','promoImage'];
    
    public function user(){
        return $this->belongsToMany('App\User');
    }
}
