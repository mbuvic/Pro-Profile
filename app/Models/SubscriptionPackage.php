<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubscriptionPackage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'duration',
        'individual_profiles_limit',
        'business_profiles_limit',
        'features',
        'is_popular',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'features' => 'array',
        'is_popular' => 'boolean',
        'is_active' => 'boolean',
        'individual_profiles_limit' => 'integer',
        'business_profiles_limit' => 'integer',
        'sort_order' => 'integer',
    ];

    public function subscriptions(): HasMany
    {
        return $this->hasMany(Subscription::class);
    }

    public function getFormattedPriceAttribute(): string
    {
        return 'KES ' . number_format($this->price, 2);
    }

    public function getDurationLabelAttribute(): string
    {
        return match($this->duration) {
            'month' => 'per month',
            'year' => 'per year',
            'lifetime' => 'one-time payment',
            default => $this->duration,
        };
    }
}
