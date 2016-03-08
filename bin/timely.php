#!/usr/bin/env php
<?php
// timely.php

require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Console\Application;
use Wicked\Timely\Command\Track;
use Wicked\Timely\Command\Show;

$application = new Application();
$application->addCommands(
    array(
        new Track(),
        new Show()
    )
);
$application->run();