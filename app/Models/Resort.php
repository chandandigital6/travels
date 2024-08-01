<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resort extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function resortStates()
    {
        return $this->hasMany(ResortState::class, 'resort_id');
    }
}
