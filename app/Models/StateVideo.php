<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StateVideo extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function states()
    {
        return $this->belongsTo(State::class,'state_id');
    }


    public function getYouTubeEmbedUrlAttribute()
    {
        $youtubeUrl = $this->youTube_url;
        if (preg_match('/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $youtubeUrl, $matches)) {
            return 'https://www.youtube.com/embed/' . $matches[1];
        }

        return null;
    }
}
