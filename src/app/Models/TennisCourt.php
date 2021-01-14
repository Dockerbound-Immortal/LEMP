<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CourtSurface;

final class TennisCourt extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'free_access',
        'num_of_courts',
        'disabled_access',
        'long',
        'lat',
        'court_surface_id', 
    ];

    public function courtSurface() {
        return $this->hasOne('CourtSurface', 'id');
    }
}
