<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Motorcycle extends Model
{
    protected $fillable = [
        'slug',
        'name',
        'brand',
        'cc',
        'transmission',
        'category',
        'description',
    ];

    public function serviceComponents(): HasMany
    {
        return $this->hasMany(ServiceComponent::class);
    }
}