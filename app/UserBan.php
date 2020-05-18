<?php

declare(strict_types=1);

namespace App;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserBan extends Model
{

    protected $fillable = [
        'user_id', 'timestamp_ban', 'timestamp_unban',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return bool
     */
    public function isValid(): bool
    {
        return time() < $this->getAttributeValue('timestamp_unban');
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getTimeBanned(): Carbon
    {
        return Carbon::create(date('Y-m-d H:i:s', $this->getAttributeValue('timestamp_ban')));
    }

    /**
     * @return \Carbon\Carbon
     */
    public function getTimeUnbanned(): Carbon
    {
        return Carbon::create(date('Y-m-d H:i:s', $this->getAttributeValue('timestamp_ban')));
    }
}
