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
     * @param boolean $isEnabled
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
     * Gets the profile.
     * 
     * @return ProfileInterface
     */
    function getProfile();
    
    /**
     * Sets the profile.
     * 
     * @param ProfileInterface
     */
    function setProfile(ProfileInterface $profile);


    /**
     * @return \DateTime
     */
    function getCreatedAt();
    
    /**
     * @param \DateTime $createdAt
     */
    function setCreatedAt(\DateTime $createdAt = null);

    /**
     * @return \DateTime
     */
    function getUpdatedAt();
    
    /**
     * @param \DateTime $updatedAt
     */
    function setUpdatedAt(\DateTime $updatedAt = null);

    /**
     * @return \DateTime
     */
    function getLastLogin();
    
    /**
     * Sets the last login time
     *
     * @param \DateTime $lastLogin
     */
    function setLastLogin(\DateTime $lastLogin = null);
}
