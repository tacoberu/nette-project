<?php

/**
 * This file is part of the Taco Library (http://dev.taco-beru.name)
 *
 * Copyright (c) 2004, 2011 Martin Takáč (http://martin.takac.name)
 *
 * For the full copyright and license information, please view
 * the file license.txt that was distributed with this source code.
 *
 * PHP version 5.3
 */

use Nette\Application\Routers\Route,
	Nette\Application\Routers\SimpleRouter;


// Load Composer
require_once VENDORS_DIR . '/autoload.php';

// Configure application
$configurator = new Nette\Config\Configurator;

// Enable Nette Debugger for error visualisation & logging
Nette\Diagnostics\Debugger::$maxDepth = 5;  // hloubka zanorení polí
Nette\Diagnostics\Debugger::$maxLen   = 1000; // maximální délka retezce
$configurator->enableDebugger(__DIR__ . '/../../var/logs');

// Enable RobotLoader - this will load all classes automatically
$configurator->setTempDirectory(__DIR__ . '/../../temp');
$configurator->createRobotLoader()
	->addDirectory(LIBS_DIR)
	->addDirectory(__DIR__)
	->register();

// Create Dependency Injection container from config.neon file
$configurator->addConfig(__DIR__ . '/config.neon');
$container = $configurator->createContainer();

// Run the application!
$container->application->run();
