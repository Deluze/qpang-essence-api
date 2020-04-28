<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'item_id', 'code_name', 'clip_size', 'clip_amount', 'damage', 'effect_id', 'chance', 'duration',
    ];

    /**
     * @return int
     */
    public function getItemId(): int
    {
        return $this->getAttributeValue('item_id');
    }

    /**
     * @return string
     */
    public function getCodeName(): string
    {
        return $this->getAttributeValue('code_name');
    }

    /**
     * @return int
     */
    public function getDamage(): int
    {
        return $this->getAttributeValue('damage');
    }

    /**
     * @return mixed
     */
    public function getEffect(): int
    {
        return $this->getAttributeValue('effect_id');
    }

    /**
     * @return int
     */
    public function getEffectChance(): int
    {
        return $this->getAttributeValue('chance');
    }

    /**
     * @return int
     */
    public function getEffectDuration(): int
    {
        return $this->getAttributeValue('duration');
    }

    /**
     * @return int
     */
    public function getClipSize(): int
    {
        return $this->getAttributeValue('clip_size');
    }

    /**
     * @return int
     */
    public function getClipAmount(): int
    {
        return $this->getAttributeValue('clip_amount');
    }
}
