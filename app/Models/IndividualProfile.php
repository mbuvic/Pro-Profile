<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class IndividualProfile extends Model
{
    protected $fillable = [
        'username',
        'title',
        'fullname',
        'about',
        'company',
        'location',
        'photo',
        'theme',
        'websites',
        'contacts',
        'emails',
        'social_links',
        'business_hours',
        'is_active',
    ];

    protected $casts = [
        'websites' => 'array',
        'contacts' => 'array',
        'emails' => 'array',
        'social_links' => 'array',
        'is_active' => 'boolean',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
