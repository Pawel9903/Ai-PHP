<?php
/**
 * @author Paweł Ged <pawelged9903@gmail.com>
 */

namespace App\Utils;

class Vector
{
    /**
     * @var array
     */
    private $arrayVectors = [];

    /**
     * @var int
     */
    private $minValue;

    /**
     * @var int
     */
    private $maxValue;

    /**
     * Vector constructor.
     * @param int $arrayLength
     * @param int $from
     * @param int $to
     */
    public function __construct(int $arrayLength = 100, int $from = 1, int $to = 20)
    {
        $this->setArrayVectors($arrayLength, $from, $to);
        $this->minValue = $from;
        $this->maxValue = $to;
    }

    /**
     * @param int $arrayLength
     * @param $from
     * @param $to
     */
    public function setArrayVectors(int $arrayLength,int $from,int $to): void
    {
        for($i = 0; $i <= $arrayLength; $i++)
        {
            $this->arrayVectors[$i] = rand($from, $to);
        }
    }

    /**
     * @return array
     */
    public function getArrayVectors(): array
    {
        return $this->arrayVectors;
    }

    /**
     * @return int
     */
    public function getMaxValue(): int
    {
        return $this->maxValue;
    }

    /**
     * @return int
     */
    public function getMinValue(): int
    {
        return $this->minValue;
    }

}