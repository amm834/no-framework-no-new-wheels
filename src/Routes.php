<?php declare(strict_types=1);

use Framework\Controllers\HomePage;

return [
    ['GET', '/',[ HomePage::class, 'show']],
];