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

namespace KodeKeep\Invitations\Concerns;

use KodeKeep\Invitations\Models\Invitation;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasInvitations
{
    public function invitation(): MorphOne
    {
        return $this->morphOne(Invitation::class, 'claimable');
    }
}
