<?php
/**
 * Created by PhpStorm.
 * User: pawel
 * Date: 10.03.19
 * Time: 09:21
 */

namespace Classes;

class Command
{
    /**
     * @param $nameAndSurname
     * @return mixed
     */
    public static function getNameAndSurname($nameAndSurname)
    {
        return $nameAndSurname;
    }

    /**
     * @param $name
     */
    public static function printName($name)
    {
        echo "Imię: {$name}".PHP_EOL;
    }

    /**
     * @param $name
     */
    public static function printLenghtName($name)
    {
        $lenght = strlen($name);
        echo "Długość imienia: {$lenght} znaków".PHP_EOL;
    }

    /**
     * @param $surname
     */
    public static function printSurname($surname)
    {
        echo "Nazwisko: {$surname}".PHP_EOL;
    }

    /**
     * @param $surname
     */
    public static function printSmallSurname($surname)
    {
        $smallLetters = strtolower($surname).PHP_EOL;
        echo "Nazwisko z małych liter: {$smallLetters}".PHP_EOL;
    }

    /**
     * @param $name
     * @param $surname
     */
    public static function printAll($name, $surname){
        self::printName($name);
        self::printSurname($surname);
        self::printLenghtName($name);
        self::printSmallSurname($surname);
    }
}