<?php

/**
 * Description
 *
 * File contents are functions for working with rational numbers
 *
 * PHP version 8.0.14
 *
 * @category Executives
 * @package  Functions
 * @author   Yanush Polishchuk <yanush.polishchuk@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @version  GIT: @1.0.1@
 * @link     https://www.linkedin.com/in/yanush-polishchuk-090b92178/
 * @since    2021-12-30
 */

namespace Test\Project\Rational;

/**
 * Implements gcd().
 *
 * Description
 * Function, that finds greatest common divisor
 *
 * @param int $a the integer number one
 * @param int $b the integer number two
 *
 * @return int as greatest common divisor
 */

function gcd(int $a, int $b): int
{
    /**
     * using Euclidean algorithm for calculating gcd
     */
    return $b ? gcd($b, $a % $b) : $a;
}

/**
 * Implements makeRational().
 *
 * Description
 * Function, that makes constructor
 *
 * @param int $numer is numerator of a fraction
 * @param int $denom is a fraction denominator
 *
 * @return string type of fraction
 */

function makeRational(int $numer, int $denom): string
{
    /**
     * doing fraction normalization
     */
    $gcd = gcd($numer, $denom);
    $numer = $numer / $gcd;
    $denom = $denom / $gcd;

    return "{$numer}/{$denom}";
}

/**
 * Implements getNumer().
 *
 * Description
 * Function, that gets numerator from fraction
 *
 * @param string $rational is given fraction
 *
 * @return int number as numerator
 */

function getNumer(string $rational): int
{
    /**
     * using function explode to get numerator
     */
    $numer = explode('/', $rational)[0];
    return (int) $numer;
}

/**
 * Implements getDenom().
 *
 * Description
 * Function, that gets denominator from fraction
 *
 * @param string $rational is given fraction
 *
 * @return int number as denominator
 */

function getDenom(string $rational): int
{
    /**
     * using function explode to get denominator
     */
    $denom = explode('/', $rational)[1];
    return (int) $denom;
}

/**
 * Implements add().
 *
 * Description
 * Function, that adds two fractions
 *
 * @param string $rat1 is first given fraction
 * @param string $rat2 is second given fraction
 *
 * @return string as result fraction
 */

function add(string $rat1, string $rat2): string
{
    /**
     * using cross method factoring
     */
    $numer1 = getNumer($rat1) * getDenom($rat2);
    $numer2 = getNumer($rat2) * getDenom($rat1);
    $numer = $numer1 + $numer2;
    $denom = getDenom($rat1) * getDenom($rat2);

    return makeRational($numer, $denom);
}

/**
 * Implements sub().
 *
 * Description
 * Function, that subtracts from one fraction another
 *
 * @param string $rat1 is first given fraction
 * @param string $rat2 is second given fraction
 *
 * @return string as result fraction
 */

function sub(string $rat1, string $rat2): string
{
    /**
     * using cross method factoring
     */
    $numer1 = getNumer($rat1) * getDenom($rat2);
    $numer2 = getNumer($rat2) * getDenom($rat1);
    $numer = $numer1 - $numer2;
    $denom = getDenom($rat1) * getDenom($rat2);

    return makeRational($numer, $denom);
}

/**
 * Implements RatToString().
 *
 * Description
 * Function, that returns string representation of a number
 *
 * @param string $rat3 is given fraction
 *
 * @return string as result fraction
 */

function RatToString($rat3)
{
    /**
     * nothing special
     */
    return "$rat3";
}
