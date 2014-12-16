<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\User\Builder;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface UserBuilderInterface
{
    /**
     * @return void
     */
    function create();
    
    /**
     * @return \Xidea\Component\User\Model\UserInterface
     */
    function getUser();
}
