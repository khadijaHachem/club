<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClubSport extends Model
{
    use HasFactory,SoftDeletes;
    protected $table ='club_sport';
    protected $fillable = ['club_id','sport_id'];
}
