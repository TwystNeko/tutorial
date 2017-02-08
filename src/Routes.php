<?php declare(strict_types = 1);

return [
	['GET', '/', ['App\Controllers\Signup', 'show']],
	['GET', '/{slug}', ['App\Controllers\Page', 'show']],
];