<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'type_id',
        'url',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function getRoomImage()
    {
        return asset('img/room/'.$this->room->number.'/'.$this->url);
    }

    public function getTypeImage()
    {
        return asset('img/type/'.$this->type->name.'/'.$this->url);
    }
}
