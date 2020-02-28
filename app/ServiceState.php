<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceState extends Model
{
     protected $fillable = ['status'];


     public function user()
     {
    
        return $this->belongsToMany(User::class)->withTimestamps();
   
     }
 
     public function products()
     {
    
        return $this->belongsToMany(Product::class)->withTimestamps();
   
     }
 
     public function marck()
     {
    
        return $this->belongsToMany(Marck::class)->withTimestamps();
   
     }
 
     public function statetenis()
     {
    
        return $this->belongsToMany(StateTenis::class)->withTimestamps();
   
     }
 }

