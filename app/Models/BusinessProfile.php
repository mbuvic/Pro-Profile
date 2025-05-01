<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class BusinessProfile extends Model
{
    use LogsActivity, SoftDeletes;
    protected $fillable = [
        'user_id',
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

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logOnly(['*']);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
