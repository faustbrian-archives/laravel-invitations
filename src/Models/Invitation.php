<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Invitations.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\Invitations\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Invitation extends Model
{
    protected $fillable = ['code', 'email', 'claimed_at'];

    protected $dates = ['claimed_at'];

    public function claimable(): MorphTo
    {
        return $this->morphTo('claimable');
    }

    public function claim(Model $claimer): bool
    {
        $this->claimer()->associate($claimer);
        $this->claimed_at = Carbon::now();

        return (bool) $this->save();
    }

    public function claimed(): bool
    {
        return ! empty($this->claimed_at);
    }

    public static function getNewCode(array $data): self
    {
        $data['code'] = bin2hex(openssl_random_pseudo_bytes(16));

        return static::create($data);
    }

    public static function findInviteByCode(string $code): self
    {
        return static::whereCode('code')->first();
    }

    public static function findValidInviteByCode(string $code): self
    {
        return static::whereCode($code)->whereNull('claimed_at')->firstOrFail();
    }
}
