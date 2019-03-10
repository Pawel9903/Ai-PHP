<?php

use Classes\Command;
use Classes\RandomNumbers;

include "Classes/Command.php";

$command = new Command(new RandomNumbers());
$command->printAll();