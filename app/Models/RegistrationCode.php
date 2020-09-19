<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RegistrationCode extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'user_id', 'code',
    ];

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->getAttributeValue('code');
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
