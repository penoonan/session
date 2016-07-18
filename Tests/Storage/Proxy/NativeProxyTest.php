<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace pno\Request\Tests\Session\Storage\Proxy;

use pno\Session\Storage\Proxy\NativeProxy;

/**
 * Test class for NativeProxy.
 *
 * @author Drak <drak@zikula.org>
 */
class NativeProxyTest extends \PHPUnit_Framework_TestCase
{
    public function testIsWrapper()
    {
        $proxy = new NativeProxy();
        $this->assertFalse($proxy->isWrapper());
    }

    public function testGetSaveHandlerName()
    {
        $name = ini_get('session.save_handler');
        $proxy = new NativeProxy();
        $this->assertEquals($name, $proxy->getSaveHandlerName());
    }
}
