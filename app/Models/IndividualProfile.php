<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class IndividualProfile extends Model
{
    use LogsActivity, SoftDeletes;
    protected $fillable = [
        'user_id',
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

    public function getRouteKeyName()
    {
        return 'username'; // or 'slug' if you have a slug column
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logOnly(['*']);
    }

    protected static function booted()
    {
        static::addGlobalScope('current_user', function (Builder $builder) {
            if (Auth::check() && !Auth::user()->is_admin) {
                $builder->where('user_id', Auth::id());
            }
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
