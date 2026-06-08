<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    protected $fillable = [
        'type',
        'name',
        'slug',
        'subtitle',
        'description',
        'full_description',
        'features',
        'benefits',
        'process',
        'icon',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'features' => 'array',
        'benefits' => 'array',
        'process' => 'array',
        'is_active' => 'boolean',
    ];

    public function scopeProducts($query)
    {
        return $query->where('type', 'product')->orderBy('sort_order');
    }

    public function scopeSpecialties($query)
    {
        return $query->where('type', 'specialty')->orderBy('sort_order');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function getDescriptionForSlug(): string
    {
        return $this->subtitle ?? $this->description ?? '';
    }
}
