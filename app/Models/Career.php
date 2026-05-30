<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'department',
        'location',
        'type',
        'description',
        'requirements',
        'responsibilities',
        'is_active',
        'posted_at',
        'closing_at',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
