<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\User\Tests\Unit;

use Xidea\User\Role\DefaultRole;

/**
 * @author Artur Pszczółka <artur.pszczolka@xidea.pl>
 */
class RoleTest extends \PHPUnit_Framework_TestCase
{
    public function testName()
    {
        $role = $this->createRole(null, null);
        $this->assertNull($role->getName());
        
        $role->setName('User role');
        $this->assertEquals('User role', $role->getName());
    }
    
    public function testRole()
    {
        $role = $this->createRole(null, null);
        $this->assertNull($role->getRole());
        
        $role->setRole('ROLE_USER');
        $this->assertEquals('ROLE_USER', $role->getRole());
    }
    
    protected function createRole($name, $role)
    {
        return new DefaultRole($name, $role);
    }
}
