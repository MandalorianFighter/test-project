<?php

/**
 * Description
 *
 * File contents are functions for working with points
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

namespace Test\Project\PointsInter;

/**
 * Implements makeDecartPoint().
 *
 * Description
 * Function, that construct a point, based on a polar coordinate system
 *
 * @param int $x the integer that shows coordinates of a point on the x-coordinate
 * @param int $y the integer that shows coordinates of a point on the y-coordinate
 *
 * @return array<string, float> with angle and radius
 */

function makeDecartPoint($x, $y)
{
    /**
     * calculate angle and radius for polar coordinate system
     */
    return [
        'angle' => atan2($y, $x),
        'radius' => sqrt($x ** 2 + $y ** 2)
    ];
}

/**
 * Implements getX().
 *
 * Description
 * Function, that returns x-coordinate of the point
 *
 * @param array<string, float> $point as a given point
 *
 * @return float as x-coordinate of the given point
 */

function getX($point)
{
    /**
     * calculate x-coordinate with the help of angle and radius
     */
    return $point['radius'] * cos($point['angle']);
}

/**
 * Implements getY().
 *
 * Description
 * Function, that returns y-coordinate of the point
 *
 * @param array<string, float> $point as a given point
 *
 * @return float as y-coordinate of the given point
 */

function getY($point)
{
    /**
     * calculate y-coordinate with the help of angle and radius
     */
    return $point['radius'] * sin($point['angle']);
}
