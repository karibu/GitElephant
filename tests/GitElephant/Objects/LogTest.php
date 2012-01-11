<?php

/**
 * This file is part of the GitElephant package.
 *
 * (c) Matteo Giachino <matteog@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Just for fun...
 */

namespace GitElephant\Objects;

use GitElephant\TestCase;
use GitElephant\Objects\Log;

/**
 * LogTest
 *
 * @author Mathias Geat <mathias@ailoo.net>
 */
class LogTest extends TestCase
{
    public function setUp()
    {
        $this->initRepository();
        $this->getRepository()->init();

        for ($i = 0; $i < 50; $i++) {
            $this->addFile('test file ' . $i);
            $this->getRepository()->commit('test commit index:' . $i, true);
        }
    }

    public function testLogCountable()
    {
        $log = $this->getRepository()->getLog();
        $this->assertEquals($log->count(), count($log));
    }

    public function testLogCountLimit()
    {
        $log = $this->getRepository()->getLog(null, null, null);
        $this->assertEquals(50, $log->count());

        $log = $this->getRepository()->getLog(null, 10, null);
        $this->assertEquals(10, $log->count());

        $log = $this->getRepository()->getLog(null, 50, null);
        $this->assertEquals(50, $log->count());

        $log = $this->getRepository()->getLog(null, 60, null);
        $this->assertEquals(50, $log->count());

        $log = $this->getRepository()->getLog(null, 1, null);
        $this->assertEquals(1, $log->count());

        $log = $this->getRepository()->getLog(null, 0, null);
        $this->assertEquals(0, $log->count());

        $log = $this->getRepository()->getLog(null, -1, null);
        $this->assertEquals(50, $log->count());
    }

    public function testLogOffset()
    {
        $log = $this->getRepository()->getLog(null, null, 0);
        $this->assertEquals(50, $log->count());

        $log = $this->getRepository()->getLog(null, null, 20);
        $this->assertEquals(30, $log->count());

        $log = $this->getRepository()->getLog(null, null, 50);
        $this->assertEquals(0, $log->count());

        $log = $this->getRepository()->getLog(null, null, 100);
        $this->assertEquals(0, $log->count());
    }
}
