<?php

namespace Sync\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Integration extends Model
{
    /** @var array защита от массового присваивания */
    protected $guarded = [
        'id',
        'name',
        'integration_id',
        'integration_secret',
        'redirect_url',
    ];

    /**
     * Связь с таблицей ключей доступа (Один к одному)
     *
     * @return BelongsToMany
     */
    public function accounts(): BelongsToMany
    {
        return $this->belongsToMany(Account::class);
    }
}