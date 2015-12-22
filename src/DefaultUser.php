<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\User;

/**
 */
class DefaultUser extends AbstractUser
{
    public function __construct()
    {
        $this->salt = md5(uniqid(null, true));
        $this->roles = [
            new DefaultRole('ROLE_USER')
        ];
    }
}
