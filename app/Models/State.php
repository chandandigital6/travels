<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function destination()
    {
        return $this->belongsTo(Destination::class,'destination_id');
    }


    public function stateContents()
    {
        return $this->hasMany(StateContent::class,'state_id');
    }

    public function stateVideo()
    {
        return $this->hasMany(StateVideo::class,'state_id');
    }


    public function seo()
    {
        return $this->hasMany(Seo::class,'state_id');
    }


}
