<?php

return PhpCsFixer\Config::create()
    ->setRules([
        '@Symfony' => true,
    ])
    ->setRiskyAllowed(true)
    ->setFinder(PhpCsFixer\Finder::create()->in(__DIR__.'/src'))
;
