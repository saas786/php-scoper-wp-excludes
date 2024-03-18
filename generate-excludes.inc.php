<?php

declare(strict_types=1);

use PhpParser\ParserFactory;
use Snicco\PhpScoperExcludes\Option;

return [
    // use the current working directory
    Option::OUTPUT_DIR => __DIR__ . '/generated',
    // pass files as command arguments
    Option::FILES => [
        __DIR__ . '/stubs/the-events-calendar-stubs.php',
        __DIR__ . '/stubs/event-tickets-stubs.php',
        __DIR__ . '/stubs/message-board-stubs.php',
        __DIR__ . '/stubs/knowledgebase-stubs.php',
        __DIR__ . '/source/vendor/php-stubs/gravity-forms-stubs/gravity-forms-stubs.php',
        __DIR__ . '/source/vendor/lipemat/phpstan-wordpress/stubs/cmb2/cmb2-2.11.php',
        // https://github.com/snicco/php-scoper-wordpress-excludes/blob/6.8.1/generate-excludes.inc.php#L13
        __DIR__ . '/source/vendor/php-stubs/wordpress-stubs/wordpress-stubs.php',
        __DIR__ . '/source/vendor/php-stubs/wordpress-globals/wordpress-globals.php',
        // https://github.com/snicco/php-scoper-woocommerce-excludes/blob/6.0.0/generate-excludes.inc.php#L13
        __DIR__ . '/source/vendor/php-stubs/woocommerce-stubs/woocommerce-packages-stubs.php',
        __DIR__ . '/source/vendor/php-stubs/woocommerce-stubs/woocommerce-stubs.php',
    ],
];
