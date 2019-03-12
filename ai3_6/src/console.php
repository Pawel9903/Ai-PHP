<?php
/**
 * @author Paweł Ged <pawelged9903@gmail.com>
 */

use Ai\Factories\CommandFactory;

include('autoloader.php');

$creator = new CommandFactory();
$command = $creator->createCommand((int) $argv[1]);
$command->printAll();