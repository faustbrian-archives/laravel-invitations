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

use KodeKeep\Invitations\Models\Invitation;

return [

    'models' => [

        'invitation' => Invitation::class,

    ],

    'tables' => [

        'invitations' => 'invitations',

        'model_has_invitations' => 'model_has_invitations',

    ],

];
