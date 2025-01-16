<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarFeature extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = 'car_id';

    protected $guarded = [];

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }

}
