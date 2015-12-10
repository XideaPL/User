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
interface BuilderInterface
{
    /**
     * @return void
     */
    function create();
    
    /**
     * @return \Xidea\User\UserInterface
     */
    function getUser();
}
