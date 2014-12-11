<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\User\Model\Builder;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
class UserDirector implements UserDirectorInterface
{
    protected $userBuilder;

    public function __construct(UserBuilderInterface $userBuilder)
    {
        $this->userBuilder = $userBuilder;
    }
    
    public function build()
    {
        $this->userBuilder->create();
        
        return $this->userBuilder->getUser();
    }
}
