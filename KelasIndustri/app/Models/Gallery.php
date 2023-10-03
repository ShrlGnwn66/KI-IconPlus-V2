<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';



    public function setimageAttribute($image)
    {
        if (is_array($image)) {
          $this->attributes['image'] = json_encode($image);
        }
    }

    public function getimageAttribute($image)
    {
        return json_decode($image, true);
    }

    

}

