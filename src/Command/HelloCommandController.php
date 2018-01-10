<?php
namespace Srotsch\HelloT3console\Command;

/*
 * This file is part of the hello-t3console project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read
 * LICENSE file that was distributed with this source code.
 *
 */

use Helhum\Typo3Console\Mvc\Controller\CommandController;

/**
 * Example of a TYPO3 Console command controller implementation
 */
class HelloCommandController extends CommandController
{
    /**
     * Displays the infamous "Hello, world!" message
     */
    public function helloWorldCommand()
    {
        $this->outputLine('Hello, world!');
    }
}
