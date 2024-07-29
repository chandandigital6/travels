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
        return $this->belongsTo(StateContent::class,'state_id');
    }


    public function seo()
    {
        return $this->belongsTo(Seo::class,'state_id');
    }


}
