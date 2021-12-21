<?php

use Webmozart\Assert\Assert;
use function StringUtils\capitalize;

require("src/StringUtils.php");
require("vendor/autoload.php");


Assert::eq(capitalize('hello'), 'Hello');

Assert::eq(capitalize(''), '');

