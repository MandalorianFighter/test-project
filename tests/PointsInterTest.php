<?php

/**
 * Functions as interfaces for working with points
 * PHP version 8.0.14
 *
 * @category Tests
 * @package  Functions
 * @author   Yanush Polishchuk <yanush.polishchuk@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @version  GIT: @1.0.1@
 * @link     https://www.linkedin.com/in/yanush-polishchuk-090b92178/
 * @since    2021-12-30
 */

namespace Test\Project\Tests;

use PHPUnit\Framework\TestCase;

use function Test\Project\PointsInter\makeDecartPoint;
use function Test\Project\PointsInter\getX;
use function Test\Project\PointsInter\getY;

class PointsInterTest extends TestCase
{
    public function testMainFlow(): void
    {
        $point = makeDecartPoint(4, 8);

        $this->assertEquals(4, getX($point));
        $this->assertEquals(8, getY($point));
    }
}
