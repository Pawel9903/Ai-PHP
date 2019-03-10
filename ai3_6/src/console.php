<?php
/**
 * @author Paweł Ged <pawelged9903@gmail.com>
 */

use Ai\Classes\CommandCreator;

include('autoloader.php');

$creator = new CommandCreator();
$command = $creator->createCommand((int) $argv[1]);
$command->printAll();