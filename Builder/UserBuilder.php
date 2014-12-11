<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\User\Model\Builder;

use Xidea\Component\User\Model\Factory\UserFactoryInterface,
    Xidea\Component\User\Model\MemberInterface;

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
     * @var UserFactoryInterface
     */
    protected $factory;

    public function __construct(UserFactoryInterface $userFactory)
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
