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
abstract class AbstractAdvancedUser extends AbstractUser implements AdvancedUserInterface
{
    /*
     * @var string
     */
    protected $email;

    /*
     * @var boolean
     */
    protected $isEnabled;
    
    /*
     * @var string
     */
    protected $confirmationToken;
    
    /*
     * @var ProfileInterface
     */
    protected $profile;
    
    /*
     * @var \DateTime
     */
    protected $createdAt;
    
    /*
     * @var \DateTime
     */
    protected $updatedAt;
    
    /*
     * @var \DateTime
     */
    protected $lastLogin;

    /**
     * 
     */
    public function __construct()
    {
        $this->isEnabled = true;
        parent::__construct();
    }
    
    /**
     * @inheritDoc
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * @inheritDoc
     */
    public function setEmail($email)
    {
        $this->email = $email;
        
        return $this;
    }
    
    /**
     * @inheritDoc
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;
        
        return $this;
    }
    
    /**
     * @inheritDoc
     */
    public function isEnabled()
    {
        return $this->isEnabled;
    }
    
    /**
     * @inheritDoc
     */
    public function getConfirmationToken()
    {
        return $this->confirmationToken;
    }
    
    /**
     * @inheritDoc
     */
    public function setConfirmationToken($confirmationToken)
    {
        $this->confirmationToken = $confirmationToken;
        
        return $this;
    }
    
    /**
     * @inheritDoc
     */
    public function getProfile()
    {
        return $this->profile;
    }
    
    /**
     * @inheritDoc
     */
    public function setProfile(ProfileInterface $profile)
    {
        $this->profile = $profile;
        
        return $this;
    }
    
    /**
     * @inheritDoc
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    
    /**
     * @inheritDoc
     */
    public function setCreatedAt(\DateTime $createdAt = null)
    {
        $this->createdAt = $createdAt;
        
        return $this;
    }
    
    /**
     * @inheritDoc
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    
    /**
     * @inheritDoc
     */
    public function setUpdatedAt(\DateTime $updatedAt = null)
    {
        $this->updatedAt = $updatedAt;
        
        return $this;
    }
    
    /**
     * @inheritDoc
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }
    
    /**
     * @inheritDoc
     */
    public function setLastLogin(\DateTime $lastLogin = null)
    {
        $this->lastLogin = $lastLogin;
        
        return $this;
    }
}
