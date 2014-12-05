<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\User\Model;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface UserInterface extends \Serializable
{

    /**
     * Returns a user id.
     * 
     * @return string The user id
     */
    function getId();

    /**
     * Gets the username.
     * 
     * @return string
     */
    function getUsername();
    
    /**
     * Sets the username.
     * 
     * @param string $username
     */
    function setUsername($username);

    /**
     * Gets the plain password.
     *
     * @return string
     */
    function getPlainPassword();

    /**
     * Sets the plain password.
     *
     * @param string $password
     */
    function setPlainPassword($password);

    /**
     * Gets the password.
     * 
     * @return string
     */
    function getPassword();
    
    /**
     * Sets the password.
     * 
     * @param string $password
     */
    function setPassword($password);
    
    /**
     * Gets the salt.
     * 
     * @return string
     */
    function getSalt();
    
    /**
     * Sets the salt.
     * 
     * @param string $salt
     */
    function setSalt($salt);
    
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
