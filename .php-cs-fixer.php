<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = (new Finder())
    ->in(__DIR__)
    ->ignoreDotFiles(false)
    ->exclude(['dev-tools/phpstan', 'tests/Fixtures']);

$rules = [
    '@auto' => true,
    '@auto:risky' => true,
];

return (new Config())
    ->setRiskyAllowed(true)
    ->setRules($rules)
    ->setFinder($finder)
    ->setCacheFile('var/cache/.php-cs-fixer.cache');
