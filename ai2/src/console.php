<?php


/**
 * @author <pawelged@gmail.com>
 */
include('Classes/Name.php');
include('Classes/Command.php');

use Classes\Name;
use Classes\Command;

$name = new Name(Command::getNameAndSurname($argv[1]));
Command::printAll($name->getName(), $name->getSurname());

