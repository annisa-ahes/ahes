<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'information',
    ];

    public function image()
    {
        return $this->hasMany(Image::class);
    }

    public function firstImage()
    {
        if (count($this->image) > 0) {
            return $this->image->first()->getTypeImage();
        }

        return asset('img/default/default-room.png');
    }
}
