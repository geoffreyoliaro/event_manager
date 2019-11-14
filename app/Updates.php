<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Updates extends Model
{
    protected $table = 'event_updates';
    protected $primaryKey ='event_Id';
    public $timestamps = true;
    protected $fillable = [ 'username', 'email', 'regularSeats','vipSeats'];
    
    public function user(){
        return $this->belongsToMany('App\User');
    }
}