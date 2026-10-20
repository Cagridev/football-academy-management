<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'birth_year',
        'description',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'birth_year' => 'integer',
            'is_active' => 'boolean',
        ];
    }

    public function players(): BelongsToMany
    {
        return $this->belongsToMany(Player::class)->withTimestamps();
    }
}
