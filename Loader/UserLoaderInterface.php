<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\User\Loader;

use Xidea\Component\Base\Loader\ModelLoaderInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface UserLoaderInterface extends ModelLoaderInterface
{
    /**
     * Returns a user by id.
     * 
     * @param int $id
     * 
     * @return \Xidea\Component\User\UserInterface
     */
    function load($id);
    
    /**
     * Returns a user by username.
     * 
     * @param string $username
     * 
     * @return \Xidea\Component\User\UserInterface
     */
    function loadOneByUsername($username);
}
