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
     * 
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
}
