<?php

/**
 * Description
 *
 * File contents are functions for working with segments
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

namespace Segments;

/**
 * Implements makeDecartPoint().
 *
 * Description
 * Function, that get a middle point between two points
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
    $point = [
        'x' => $x,
        'y' => $y
    ];
    return $point;
}

/**
 * Implements makeSegment().
 *
 * Description
 * Function, that returns a segment of two points
 *
 * @param array<string,int> $point1 is a first point of segment
 * @param array<string,int> $point2 is a second point of segment
 *
 * @return array<string, array> as coordinates of a point
 */

function makeSegment(array $point1, array $point2): array
{
    /**
     * assign points to segment
     */
    return ['beginPoint' => $point1, 'endPoint' => $point2];
}

/**
 * Implements getMidpointOfSegment().
 *
 * Description
 * Function, that returns a middle point of the given segment
 *
 * @param array<string, array> $segment as a segment of two points
 *
 * @return array<string, int> as coordinates of middle point
 */

function getMidpointOfSegment(array $segment): array
{
    $point1 = $segment['beginPoint'];
    $point2 = $segment['endPoint'];
    /**
     * find middle point of segment
     */
    $result['x'] = ($point1['x'] + $point2['x']) / 2;
    $result['y'] = ($point1['y'] + $point2['y']) / 2;

    return $result;
}

/**
 * Implements getBeginPoint().
 *
 * Description
 * Function, that returns begin point of the given segment
 *
 * @param array<string, array> $segment as a segment of two points
 *
 * @return array<string, int> as coordinates of begin point
 */

function getBeginPoint(array $segment): array
{
    /**
     * return of begin point of segment
     */
    return $segment['beginPoint'];
}

/**
 * Implements getEndPoint().
 *
 * Description
 * Function, that returns end point of the given segment
 *
 * @param array<string, array> $segment as a segment of two points
 *
 * @return array<string, int> as coordinates of end point
 */

function getEndPoint(array $segment): array
{
    /**
     * return of end point of segment
     */
    return $segment['endPoint'];
}
