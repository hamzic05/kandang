<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Houses extends Model
{
    protected $table = 'houses';
    protected $fillable = [
        'code',
        'name',
        'location',
        'description',
        'coop_type',
        'dimensions',
        'total_area',
    ];

    public function zonechicken()
    {
        return $this->hasMany(ZoneChicken::class);
    }
}
