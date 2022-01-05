<?php

/**
 * Function, that finds a middle point between two points
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

use function Points\getMidpoint;

class PointsTest extends TestCase
{
    public function testGetMidPoint(): void
    {
        $this->assertEquals(['x' => 2, 'y' => 2], getMidpoint(['x' => 0, 'y' => 0], ['x' => 4, 'y' => 4]));
    }
}
