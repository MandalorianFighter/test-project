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

namespace Points;

/**
 * Implements getMidpoint().
 *
 * Description
 * Function, that get a middle point between two points
 *
 * @param array<string, int> $point1 the array that contains coordinates of a point number one
 * @param array<string, int> $point2 the array that contains coordinates of a point number two
 *
 * @return array<string, int> as a middle point between two points
 */

function getMidpoint(array $point1, array $point2): array
{
    /**
     * find coordinates of middle point
     */
    $result['x'] = ($point1['x'] + $point2['x']) / 2;
    $result['y'] = ($point1['y'] + $point2['y']) / 2;

    return $result;
}
