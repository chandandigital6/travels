<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function gallery()
    {
        return $this->hasMany(ServiceGallery::class);
    }

    public function video()
    {
        return $this->hasMany(ServiceVideo::class);
    }


    public function seo()
    {
        return $this->hasMany(Seo::class);
    }


    public function choose()
    {
        return $this->hasMany(ServiceChoose::class);
    }


    public function serviceHeader()
    {
        return $this->hasMany(ServiceHeader::class);
    }

    public function serviceBefore()
    {
        return $this->hasMany(ServiceBefore::class);
    }
}
