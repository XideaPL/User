<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\User\Tests\Unit;

use Xidea\User\DefaultUser;
use Xidea\User\DefaultRole;

/**
 * @author Artur Pszczółka <artur.pszczolka@xidea.pl>
 */
class UserTest extends \PHPUnit_Framework_TestCase
{
    public function testUsername()
    {
        $user = $this->createUser();
        $this->assertNull($user->getUsername());
        
        $user->setUsername('johndoe');
        $this->assertEquals('johndoe', $user->getUsername());
    }
    
    public function testRoles()
    {
        $user = $this->createUser();
        
        $this->assertEquals(1, count($user->getRoles()));
        
        $user->setRoles([
            new DefaultRole('ROLE_USER'),
            new DefaultRole('ROLE_ADMIN')
        ]);
        
        $this->assertEquals(2, count($user->getRoles()));
    }
    
    public function testAddRemoveRole()
    {
        $user = $this->createUser();
        
        $this->assertEquals(1, count($user->getRoles()));
        
        $role = new DefaultRole('ROLE_ADMIN');
        $user->addRole($role);
        $this->assertEquals(2, count($user->getRoles()));
        
        $user->removeRole($role);
        $this->assertEquals(1, count($user->getRoles()));
    }
    
    protected function createUser()
    {
        return new DefaultUser();
    }
}
