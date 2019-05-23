#!/usr/bin/php -q
<?php
require_once __DIR__ . '/vendor/autoload.php';
use Symfony\Component\Console\Application;
use Console\GenerateAgeCommand;

$app = new Application('Console App', 'v1.0.0');
$app -> add(new GenerateAgeCommand());
$app -> run();