<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ResortState extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function resort()
    {
        return $this->belongsTo(Resort::class, 'resort_id');
    }
}
