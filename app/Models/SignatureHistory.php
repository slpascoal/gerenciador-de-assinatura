<?php

namespace App\Models;

use App\Enums\SignatureStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignatureHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'signature_id',
        'old_plan_id',
        'old_status',
    ];

    protected $casts = [
        'old_status' => SignatureStatus::class,
    ];

    public function signature(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Signature::class);
    }
}
