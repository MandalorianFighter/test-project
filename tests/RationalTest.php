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

use function Test\Project\Rational\gcd;
use function Test\Project\Rational\makeRational;
use function Test\Project\Rational\getNumer;
use function Test\Project\Rational\getDenom;
use function Test\Project\Rational\add;
use function Test\Project\Rational\sub;
use function Test\Project\Rational\RatToString;

class RationalTest extends TestCase
{
    public function testMainFlow(): void
    {
        $rat1 = makeRational(3, 9);

        $this->assertEquals(1, getNumer($rat1));
        $this->assertEquals(3, getDenom($rat1));

        $rat2 = makeRational(10, 3);
        $rat3 = add($rat1, $rat2);

        $this->assertEquals("11/3", RatToString($rat3));

        $rat4 = sub($rat1, $rat2);

        $this->assertEquals("-3/1", RatToString($rat4));
    }
}
