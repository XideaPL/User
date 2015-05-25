<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\User\Builder;

use Xidea\Component\Base\Factory\ModelFactoryInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
class UserBuilder implements UserBuilderInterface
{

    /**
     * Currently built user.
     *
     * @var UserInterface
     */
    protected $user;

    /**
     * User factory.
     *
     * @var ModelFactoryInterface
     */
    protected $factory;

    /**
     * 
     * @param ModelFactoryInterface $userFactory
     */
    public function __construct(ModelFactoryInterface $userFactory)
    {
        $this->factory = $userFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function create()
    {
        $this->user = $this->factory->create();
    }

    /**
     * {@inheritdoc}
     */
    public function getUser()
    {
        return $this->user;
    }

}
