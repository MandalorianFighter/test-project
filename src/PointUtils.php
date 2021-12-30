<?php

/**
 * Description
 *
 * File contents is a function for working with points
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

namespace PointUtils;

/**
 * Implements calculateDistance().
 *
 * Description
 * Function, that calculates distance between two points
 *
 * @param array<int, int> $point1 the array that contains coordinates of a point number one
 * @param array<int, int> $point2 the array that contains coordinates of a point number two
 *
 * @return float as a distance between two points
 */
function calculateDistance(array $point1, array $point2): float
{
    /**
     * If points are empty, the function returns null
     */

    if ($point1 === [] and $point2 === []) {
        return 0;
    }

    [$x1, $y1] = $point1;
    [$x2, $y2] = $point2;

    return ((($x2 - $x1) ** 2) + (($y2 - $y1) ** 2)) ** (1 / 2);
}
