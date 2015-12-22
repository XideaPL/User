<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\User\Tests\Unit;

use Xidea\User\DefaultRole;

/**
 * @author Artur Pszczółka <artur.pszczolka@xidea.pl>
 */
class RoleTest extends \PHPUnit_Framework_TestCase
{
    public function testName()
    {
        $role = $this->createRole(null);
        $this->assertNull($role->getName());
        
        $role->setName('ROLE_USER');
        $this->assertEquals('ROLE_USER', $role->getName());
    }
    
    protected function createRole($name)
    {
        return new DefaultRole($name);
    }
}
