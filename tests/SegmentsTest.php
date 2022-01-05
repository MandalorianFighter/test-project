<?php

/**
 * Functions, that make operations with segments
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

use function Test\Project\Segments\makeDecartPoint;
use function Test\Project\Segments\makeSegment;
use function Test\Project\Segments\getMidpointOfSegment;
use function Test\Project\Segments\getBeginPoint;
use function Test\Project\Segments\getEndPoint;

class SegmentsTest extends TestCase
{
    public function testMainFlow(): void
    {
        $segment = makeSegment(makeDecartPoint(3, 2), makeDecartPoint(0, 0));

        $this->assertEquals(['x' => 1.5, 'y' => 1], getMidpointOfSegment($segment));
        $this->assertEquals(['x' => 3, 'y' => 2], getBeginPoint($segment));
        $this->assertEquals(['x' => 0, 'y' => 0], getEndPoint($segment));
    }
}
