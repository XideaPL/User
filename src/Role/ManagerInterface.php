<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\User\Role;

use Xidea\User\RoleInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface ManagerInterface
{
    /**
     * Saves a role.
     * 
     * @param RoleInterface $role
     */
    function save(RoleInterface $role);

    /**
     * Updates a role.
     * 
     * @param RoleInterface $role
     */
    function update(RoleInterface $role);

    /**
     * Deletes a role.
     * 
     * @param RoleInterface $role
     */
    function delete(RoleInterface $role);
}
