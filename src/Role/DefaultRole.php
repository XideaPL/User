<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\User\Role;

use Xidea\User\AbstractRole;

/**
 */
class DefaultRole extends AbstractRole
{
    /*
     * @param string $name
     * @param string $role
     */
    public function __construct($name, $role)
    {
        $this->name = $name;
        $this->role = $role;
    }
}
