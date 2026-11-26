<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZoneChicken extends Model
{
protected $table = "house_zones";
 protected $fillable = [
        'house_id',
        'code',
        'name',
        'capacity',
        'status',
        'description',
    ];
public function houses()
    {
        return $this->belongsTo(Houses::class, 'house_id');
    }
}
