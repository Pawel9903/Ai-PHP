<?php
/**
 * Created by PhpStorm.
 * User: pawel
 * Date: 10.03.19
 * Time: 10:00
 */

namespace Classes;

include "RandomNumbers.php";


class Command
{
    /**
     * @Inject
     * @var RandomNumbers
     */
    private $randomNumbers;

    public function printAll()
    {
        echo "min: {$this->randomNumbers->getMinValue()}".PHP_EOL;
        echo "max: {$this->randomNumbers->getMaxValue()}".PHP_EOL;
        echo "Średnia: {$this->randomNumbers->getAverange()}".PHP_EOL;
        echo "Odchylenie standardowe: {$this->randomNumbers->getDevation()}".PHP_EOL;
        echo "Wektor znormalizowany: ".json_encode($this->randomNumbers->getNormal()).PHP_EOL;
        echo "Wektor standyryzowany: ".json_encode($this->randomNumbers->getStandard()).PHP_EOL;
    }
}