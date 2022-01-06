<?php

/**
 * Functions for operations with rectangles
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

use function Test\Project\Rectangle\makeDecartPoint;
use function Test\Project\Rectangle\makeRectangle;
use function Test\Project\Rectangle\getStartPoint;
use function Test\Project\Rectangle\getX;
use function Test\Project\Rectangle\getY;
use function Test\Project\Rectangle\getWidth;
use function Test\Project\Rectangle\getHeight;
use function Test\Project\Rectangle\containsOrigin;

class RectangleTest extends TestCase
{
    public function testMainFlow(): void
    {
        $p = makeDecartPoint(0, 1);
        $rectangle = makeRectangle($p, 4, 5);

        $this->assertFalse(containsOrigin($rectangle));

        $p2 = makeDecartPoint(-4, 3);
        $rectangle2 = makeRectangle($p2, 5, 4);

        $this->assertTrue(containsOrigin($rectangle2));
    }
}
