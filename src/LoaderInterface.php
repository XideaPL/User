<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\User;

use Xidea\Base\Model\LoaderInterface as ModelLoaderInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface LoaderInterface extends ModelLoaderInterface
{
    /**
     * Returns a user by id.
     * 
     * @param int $id
     * 
     * @return \Xidea\User\UserInterface
     */
    function load($id);
    
    /**
     * Returns a user by username.
     * 
     * @param string $username
     * 
     * @return \Xidea\User\UserInterface
     */
    function loadOneByUsername($username);
    
    /**
     * Returns a set of objects.
     * 
     * @param int $page
     * @param int $limit
     * 
     * @return array
     */
    function loadByPage($page = 1, $limit = 25);
}
