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
interface ProfileInterface
{

    /**
     * Returns a user id.
     * 
     * @return string The user id
     */
    function getId();
    
    /**
     * Gets the name.
     * 
     * @return string
     */
    function getName();
    
    /**
     * Sets the name.
     * 
     * @param string
     */
    function setName($name);
    
    /**
     * Gets the user.
     * 
     * @return AdvancedUserInterface
     */
    function getUser();
    
    /**
     * Sets the user.
     * 
     * @param AdvancedUserInterface
     */
    function setUser(AdvancedUserInterface $user);
}
