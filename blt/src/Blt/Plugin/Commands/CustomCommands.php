<?php

namespace Example\Blt\Plugin\Commands;

use Acquia\Blt\Robo\BltTasks;

/**
 * Defines a custom BLT command.
 */
class CustomCommands extends BltTasks {

  /**
   * Execute the custom command.
   *
   * @param string $arg
   *   The single argument for the command.
   *
   * @command custom:command
   * @aliases cc
   */
  public function customCommand($arg) {
    // Your command logic here.
    $this->say("Custom command executed with argument: $arg");
  }

}
