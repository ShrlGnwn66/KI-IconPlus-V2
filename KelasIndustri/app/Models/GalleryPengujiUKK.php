<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryPengujiUKK extends Model
{
    protected $table = 'gallery_pengujiukk';

    public function setpictureAttribute($picture)
    {
        if (is_array($picture)) {
          $this->attributes['picture'] = json_encode($picture);
        }
    }

    public function getpictureAttribute($picture)
    {
        return json_decode($picture, true);
    }
}
