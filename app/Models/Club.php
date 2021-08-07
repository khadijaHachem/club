<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Club extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = ['name','description','logo','city_id'];

    public function city(){

        return $this->belongsTo(City::class);

    }
    public function sports(){
        return $this->belongsToMany(Sport::class);
  
    }
    public static function boot() {
        parent::boot();

        static::deleting(function($club) { // before delete() method call this
             $club->sports()->detach();
        });
    }
   
}
