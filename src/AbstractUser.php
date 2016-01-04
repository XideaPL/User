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
abstract class AbstractUser implements UserInterface, HasRolesInterface
{
    /*
     * @var int
     */
    protected $id;
    
    /*
     * @var string
     */
    protected $username;

    /*
     * @var string
     */
    protected $salt;
    
    /*
     * @var string
     */
    protected $password;
    
    /*
     * @var string
     */
    protected $plainPassword;
    
    /*
     * @var array
     */
    protected $roles = [];

    /**
     * @inheritDoc
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @inheritDoc
     */
    public function getName()
    {
        return $this->getUsername();
    }

    /**
     * @inheritDoc
     */
    public function getUsername()
    {
        return $this->username;
    }
    
    /**
     * @inheritDoc
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }
    
    /**
     * @inheritDoc
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }
    
    /**
     * @inheritDoc
     */
    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
    }
    
    /**
     * @inheritDoc
     */
    public function getPassword()
    {
        return $this->password;
    }
    
    /**
     * @inheritDoc
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
    
    /**
     * @inheritDoc
     */
    public function getSalt()
    {
        return $this->salt;
    }
    
    /**
     * @inheritDoc
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            // see section on salt below
            // $this->salt,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }
    
    /**
     * @inheritDoc
     */
    public function setRoles(array $roles)
    {
        $this->roles = $roles;
    }

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        return $this->roles;
    }
    
    /**
     * @inheritDoc
     */
    public function addRole($role)
    {
        if(!$this->hasRole($role->getName())) {
            $this->roles[] = $role;
        }
    }
    
    /**
     * @inheritDoc
     */
    public function removeRole($role)
    {
        foreach($this->roles as $key => $userRole) {
            if($userRole->getName() == $role->getName())
                unset($this->roles[$key]);
        }
    }
    
    /**
     * @inheritDoc
     */
    public function hasRole($role)
    {
        foreach($this->roles as $userRole) {
            if($userRole->getName() == $role)
                return true;
        }
        
        return false;
    }
}
