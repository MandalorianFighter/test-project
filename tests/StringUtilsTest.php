<?php

/**
 * Function, that makes first letter capital
 * php version 8.0.14
 * 
 * @category Tests
 * @package  Functions
 * @author   Yanush Polishchuk <yanush.polishchuk@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @version  GIT: @1.0.1@
 * @link     https://www.linkedin.com/in/yanush-polishchuk-090b92178/
 * @since    2021-12-20
 */
use Webmozart\Assert\Assert;
use function StringUtils\capitalize;

require "src/StringUtils.php";
require "vendor/autoload.php";


Assert::eq(capitalize('hello'), 'Hello');

Assert::eq(capitalize(''), '');
