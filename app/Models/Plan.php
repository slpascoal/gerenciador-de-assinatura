<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'price',
        'description',
    ];

    public function signatures(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Signature::class);
    }
}
