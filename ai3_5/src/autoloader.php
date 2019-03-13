<?php
/**
 * @author Paweł Ged <pawelged9903@gmail.com>
 */

spl_autoload_register(function ($name) {
    $name = str_replace('Ai\\','',$name);
    $name = str_replace(["/", "\\"], DIRECTORY_SEPARATOR, $name);
    include "{$name}.php";
});