<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\User\Model;

/**
 */
abstract class AbstractProfile implements ProfileInterface
{
    /*
     * @var int
     */
    protected $id;
    
    /*
     * @var string
     */
    protected $name;

    /*
     * @var AdvancedUserInterface
     */
    protected $user;
    
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
        return $this->name;
    }
    
    /**
     * @inheritDoc
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @inheritDoc
     */
    public function getUser()
    {
        return $this->user;
    }
    
    /**
     * @inheritDoc
     */
    public function setUser(AdvancedUserInterface $user)
    {
        $this->user = $user;
    }
}
