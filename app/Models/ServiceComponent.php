<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServiceComponent extends Model
{
    protected $fillable = [
        'motorcycle_id',
        'name',
        'interval_text',
        'priority',
        'note',
        'sort_order',
    ];

    public function motorcycle(): BelongsTo
    {
        return $this->belongsTo(Motorcycle::class);
    }
}