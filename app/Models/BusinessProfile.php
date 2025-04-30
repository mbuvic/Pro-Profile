<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BusinessProfile extends Model
{
    protected $fillable = [
        'username',
        'business_name',
        'about',
        'location',
        'address',
        'logo',
        'theme',
        'websites',
        'contacts',
        'emails',
        'social_links',
        'services',
        'is_active',
    ];

    protected $casts = [
        'websites' => 'array',
        'contacts' => 'array',
        'emails' => 'array',
        'social_links' => 'array',
        'services' => 'array',
        'is_active' => 'boolean',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
