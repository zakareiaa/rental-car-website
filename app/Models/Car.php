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

    protected $appends = ['is_liked'];

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

    public function features(): HasOne
    {
        return $this->hasOne(CarFeature::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(CarImage::class);
    }

    public function primaryImage(): HasOne
    {
        return $this->hasOne(CarImage::class)->oldestOfMany('position');
    }

    public function favouriteBy(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'favourite_cars');
    }

    public function getIsLikedAttribute(): bool
    {
//        $user = auth()->user(); // Get the authenticated user
        $user = User::find(4);
        if (!$user) {
            return false; // If no user is logged in, default to not liked
        }

        // Check if the user has liked this car
        return $this->favouriteBy()->where('user_id', $user->id)->exists();
    }


    public function getCreatedDate(): string
    {
        return (new \Carbon\Carbon($this->created_at))->format('Y-m-d');
    }
}
