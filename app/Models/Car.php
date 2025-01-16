<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'maker_id',
        'model_id',
        'year',
        'price',
        'vin',
        'mileage',
        'car_type_id',
        'fuel_type_id',
        'user_id',
        'city_id',
        'address',
        'phone',
        'description',
        'published_at'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function carType(): BelongsTo
    {
        return $this->belongsTo(CarType::class);
    }

    public function fuelType(): BelongsTo
    {
        return $this->belongsTo(FuelType::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function maker(): BelongsTo
    {
        return $this->belongsTo(Maker::class);
    }

    public function model(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Model::class);
    }

    public function carFeatures(): HasOne
    {
        return $this->hasOne(CarFeature::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(CarImage::class);
    }

    public function favouriteBy(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'favourite_cars');
    }
}
