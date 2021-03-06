<?php
/**
 * @author Paweł Ged <pawelged9903@gmail.com>
 */

namespace Ai\Classes;

class CommandTask1
{
    /**
     *
     * @var VectorTask1
     */
    private $vector;

    /**
     * CommandTask1 constructor.
     * @param VectorTask1 $vector
     */
    public function __construct(VectorTask1 $vector)
    {
        $this->vector = $vector;
    }

    public function printMin():void
    {
        echo "min: {$this->vector->getMinValue()}".PHP_EOL;
    }

    public function printMax():void
    {
        echo "max: {$this->vector->getMaxValue()}".PHP_EOL;
    }

    public function printAverage():void
    {
        echo "Średnia: {$this->vector->getAverage()}".PHP_EOL;
    }

    public function printDeviationStandard():void
    {
        echo "Odchylenie standardowe: {$this->vector->getDeviationStandard()}".PHP_EOL;
    }

    public function printNormalize():void
    {
        echo "Wektor znormalizowany: ".json_encode($this->vector->getNormalizeArray()).PHP_EOL;
    }

    public function printStandard():void
    {
        echo "Wektor standyryzowany: ".json_encode($this->vector->getStandardArray()).PHP_EOL;
    }

    public function printAll():void
    {
        $this->printMin();
        $this->printMax();
        $this->printAverage();
        $this->printDeviationStandard();
        $this->printNormalize();
        $this->printStandard();
    }
}