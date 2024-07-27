<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StateContent extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function states()
    {
        return $this->belongsTo(State::class,'state_id');
    }

}
