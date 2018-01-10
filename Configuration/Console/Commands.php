<?php
return [
    'controllers' => [
        Srotsch\HelloT3console\Command\HelloCommandController::class
    ],
    'runLevels' => [
        'hello_t3console:hello:helloworld' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE
    ],
    'bootingSteps' => [
    ]
];
