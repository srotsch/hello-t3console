# hello-t3console

An example of extending TYPO3 Console 4.x with a custom command controller.

## How to extend TYPO3 Console

### 1. Implement a custom command controller

The custom command controller must extend `Helhum\Typo3Console\Mvc\Controller\CommandController`
and implement at least one public method containing the custom code, with a method name ending
in 'Command':

#### Command controller class:
```php
class HelloCommandController extends \Helhum\Typo3Console\Mvc\Controller\CommandController
```

#### Command method:
```php
public function helloWorldCommand() {}
```

### 2. Register the new command controller

Before being ready to be used, the custom command controller needs to be registered in
TYPO3 Console. This is done in a configuration file located at `Configuration/Console/Commands.php`,
returning an array of configuration keys/vaues.

#### 'controllers' in Commands.php
```php
'controllers' => [
     Srotsch\HelloT3console\Command\HelloCommandController::class
],
```

### 3. Configure RunLevels (optional)

In case the custom command does not require TYPO3 to be set up in order to run, e.g. if
it does not require a database connection, it can be made available in the initial command set
of TYPO3 Console by defining a RunLevel.

#### 'runLevels' in Commands.php
```php
'runLevels' => [
    'hello_t3console:hello:helloworld' => \Helhum\Typo3Console\Core\Booting\RunLevel::LEVEL_COMPILE
],
```

## Usage Example

```sh
$ git clone https://github.com/srotsch/hello-t3console.git
$ cd hello-t3console
$ composer install
$ vendor/bin/typo3cms hello:helloworld
Hello, world!
```
