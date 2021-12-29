<?php

/**
 * Description
 *
 * File contents is a function for working with strings
 *
 * PHP version 8.0.14
 *
 * @category Tests
 * @package  Functions
 * @author   Yanush Polishchuk <yanush.polishchuk@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @version  GIT: @1.0.1@
 * @link     https://www.linkedin.com/in/yanush-polishchuk-090b92178/
 * @since    2021-12-20
 */

namespace StringUtils;

/**
 * Implements capitalize().
 *
 * Description
 * Function, that makes first letter capital
 *
 * @param string $text the string that contains a word
 *
 * @return string with capital first letter
 */
function capitalize(string $text): string
{

    /**
     * If string is empty, the function returns empty string
     */

    if ($text === '') {
        return '';
    }
    $firstSymbol = mb_strtoupper($text[0]);
    $restSubstring = mb_substr($text, 1);
    return "{$firstSymbol}{$restSubstring}";
}
