<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\User;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface HasRolesInterface
{
    /**
     * @param string $role
     *
     * @return boolean
     */
    function hasRole($role);

    /**
     * Returns the roles of the user.
     *
     * @return array The roles
     */
    function getRoles();
    
    /**
     * Sets the roles of the user.
     *
     * This overwrites any previous roles.
     *
     * @param array $roles
     *
     * @return self
     */
    function setRoles(array $roles);

    /**
     * Adds a role to the user.
     *
     * @param string $role
     *
     * @return self
     */
    function addRole($role);

    /**
     * Removes a role to the user.
     *
     * @param string $role
     *
     * @return self
     */
    function removeRole($role);
}
