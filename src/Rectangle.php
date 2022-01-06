<?php

/**
 * Description
 *
 * File contents are functions for working with rectangles
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

namespace Test\Project\Rectangle;

/**
 * Implements makeDecartPoint().
 *
 * Description
 * Function, that construct a point
 *
 * @param int $x the integer that shows coordinates of a point on the x-coordinate
 * @param int $y the integer that shows coordinates of a point on the y-coordinate
 *
 * @return array<string, int> as coordinates of a point
 */


function makeDecartPoint(int $x, int $y): array
{
    /**
     * assign coordinates to the point
     */
    return [
        'x' => $x,
        'y' => $y
    ];
}

/**
 * Implements makeRectangle().
 *
 * Description
 * Function, that returns a rectangle with start point, width and height
 *
 * @param array<string, int> $point is a start point of rectangle
 * @param int $width is width of rectangle
 * @param int $height is height of rectangle
 *
 * @return array<string, mixed> as parameters of rectangle
 */

function makeRectangle(array $point, int $width, int $height): array
{
    /**
     * assign parameters to rectangle
     */
    return ['startPoint' => $point, 'width' => $width, 'height' => $height];
}

/**
 * Implements getStartPoint().
 *
 * Description
 * Function, that returns a start point of rectangle
 *
 * @param array<string, mixed> $rectangle is given rectangle
 *
 * @return array<string, int> as start point of rectangle
 */

function getStartPoint(array $rectangle): array
{
    /**
     * return start point of the rectangle
     */
    return $rectangle['startPoint'];
}

/**
 * Implements getX().
 *
 * Description
 * Function, that returns x-coordinate of the point
 *
 * @param array<string, int> $point as a given point
 *
 * @return int as x-coordinate of the given point
 */

function getX(array $point): int
{
    /**
     * return x-coordinate of the point
     */
    return $point['x'];
}

/**
 * Implements getY().
 *
 * Description
 * Function, that returns y-coordinate of the point
 *
 * @param array<string, int> $point as a given point
 *
 * @return int as y-coordinate of the given point
 */

function getY(array $point): int
{
    /**
     * return x-coordinate of the point
     */
    return $point['y'];
}

/**
 * Implements getWidth().
 *
 * Description
 * Function, that returns width of the rectangle
 *
 * @param array<string, mixed> $rectangle as a given rectangle
 *
 * @return int as width of the rectangle
 */

function getWidth(array $rectangle): int
{
    /**
     * return width of the rectangle
     */
    return $rectangle['width'];
}

/**
 * Implements getHeight().
 *
 * Description
 * Function, that returns height of the rectangle
 *
 * @param array<string, mixed> $rectangle as a given rectangle
 *
 * @return int as height of the rectangle
 */

function getHeight(array $rectangle): int
{
    /**
     * return height of the rectangle
     */
    return $rectangle['height'];
}

/**
 * Implements containsOrigin().
 *
 * Description
 * Function, that checks if the center of coordinates belongs to a rectangle
 *
 * @param array<string, mixed> $rectangle as a given rectangle
 *
 * @return bool as true or false
 */

function containsOrigin(array $rectangle): bool
{
    $pointTwo = [
    'x' => getX(getStartPoint($rectangle)) + getWidth($rectangle),
    'y' => getY(getStartPoint($rectangle)) - getHeight($rectangle)
    ];

    $startX = getX(getStartPoint($rectangle));
    $startY = getY(getStartPoint($rectangle));

    return $startX < 0 and $startY > 0 and $pointTwo['x'] > 0 and $pointTwo['y'] < 0;
}
