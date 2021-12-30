<?php

/**
 * Function, that calculate distance between two points
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

use Webmozart\Assert\Assert;

use function PointUtils\calculateDistance;

require "src/PointUtils.php";
require "vendor/autoload.php";


Assert::eq(calculateDistance([0, 0], [3, 4]), 5);

Assert::eq(calculateDistance([], []), 0);
