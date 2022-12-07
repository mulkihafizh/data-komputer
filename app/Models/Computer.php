<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;
    protected $fillable = ['room_id', 'name', 'brand_id', 'condition'];
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
