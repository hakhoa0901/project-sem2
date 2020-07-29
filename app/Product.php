<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function getPhotoAttribute()
    {
        if ($this->thumbnail != null && strlen($this->thumbnail) > 0) {
            return 'https://res.cloudinary.com/adu13/image/upload/w_150/' . $this->thumbnail . '.jpg';
        } else {
            return 'https://flcquynhon.com.vn/assets/admin/images/no_image.jpg';
        }
    }
}
