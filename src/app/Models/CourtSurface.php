<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TennisCourt;

class CourtSurface extends Model
{
    use HasFactory;

    public function tennisCourts() {
        return $this->hasMany('TennisCourt');
    }
}
