<?php

$finder = PhpCsFixer\Finder::create()
  ->exclude('vendor')
  ->in(__DIR__)
  ->name('*.php');

$config = new PhpCsFixer\Config();
return $config->setRules(
  [
    '@PSR12'       => true,
    'strict_param' => true,
    'array_syntax' => ['syntax' => 'short'],
    'ordered_imports' => ['sortAlgorithm' => 'alpha'],
    'no_unused_imports' => true,
  ]
)->setFinder($finder);
