<?php

/**
 * This file is part of prooph/pdo-event-store.
 * (c) 2016-2019 prooph software GmbH <contact@prooph.de>
 * (c) 2016-2019 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ProophTest\EventStore\Pdo\WriteLockStrategy;

use PHPUnit\Framework\TestCase;
use Prooph\EventStore\Pdo\WriteLockStrategy\NoLockStrategy;

/**
 * @group mysql
 */
class NoLockStrategyTest extends TestCase
{
    /**
     * @test
     */
    public function it_always_succeeds_locking()
    {
        $strategy = new NoLockStrategy();

        $this->assertTrue($strategy->getLock('write_lock'));
    }

    /**
     * @test
     */
    public function in_always_succeeds_releasing()
    {
        $strategy = new NoLockStrategy();

        $this->assertTrue($strategy->releaseLock('write_lock'));
    }
}
