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
interface AdvancedUserInterface extends UserInterface
{
    /**
     * Gets the email.
     *
     * @return string
     */
    function getEmail();
    
    /**
     * Sets the email.
     * 
     * @param string $email
     */
    function setEmail($email);

    /**
     * @param boolean $boolean
     *
     * @return self
     */
    function setIsEnabled($isEnabled);
    
    /**
     * @return boolean
     */
    function isEnabled();

    /**
     * Gets the confirmation token.
     *
     * @return string
     */
    function getConfirmationToken();

    /**
     * Sets the confirmation token
     *
     * @param string $confirmationToken
     *
     * @return self
     */
    function setConfirmationToken($confirmationToken);

    /**
     * @return datetime
     */
    function getCreatedAt();
    
    /**
     * @param datetime $createdAt
     */
    function setCreatedAt(\DateTime $createdAt = null);

    /**
     * @return datetime
     */
    function getUpdatedAt();
    
    /**
     * @param datetime $updatedAt
     */
    function setUpdatedAt(\DateTime $updatedAt = null);

    /**
     * @return datetime
     */
    function getLastLogin();
    
    /**
     * Sets the last login time
     *
     * @param \DateTime $lastLogin
     */
    function setLastLogin(\DateTime $lastLogin = null);
}
