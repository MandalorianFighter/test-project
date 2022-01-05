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


use PHPUnit\Framework\TestCase;

//use function Segments\makeDecartPoint;
//use function Segments\makeSegment;
//use function Segments\getMidpointOfSegment;
//use function Segments\getBeginPoint;
//use function Segments\getEndPoint;

class SegmentsTest extends TestCase
{
    public function testMainFlow(): void
    {
        $segment = Segments\makeSegment(Segments\makeDecartPoint(3, 2), Segments\makeDecartPoint(0, 0));

        $this->assertEquals(['x' => 1.5, 'y' => 1], Segments\getMidpointOfSegment($segment));
        $this->assertEquals(['x' => 3, 'y' => 2], Segments\getBeginPoint($segment));
        $this->assertEquals(['x' => 0, 'y' => 0], Segments\getEndPoint($segment));
    }
}
