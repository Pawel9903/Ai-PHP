<?php
/**
 * @author Paweł Ged <pawelged9903@gmail.com>
 */

namespace Ai\Classes;

final class VectorTask1 extends Vector
{

    /**
     * @var array
     */
    private $normalizeArray = [];

    /**
     * @var array
     */
    private $standardArray = [];

    /**
     * @var int
     */
    private $deviationStandard = 0;

    /**
     * @var float
     */
    private $average = 0;

    public function __construct(int $arrayLength = 30, int $from = 1, int $to = 100)
    {
        parent::__construct($arrayLength, $from, $to);
        $this->setAverage();
        $this->setDeviationStandard();
        $this->setStandardArray();
        $this->setNormalizeArray();
    }

    /**
     * @return int
     */
    public function getMinValue(): int
    {
        return min($this->arrayVectors);
    }

    /**
     * @return int
     */
    public function getMaxValue(): int
    {
        return max($this->arrayVectors);
    }

    /**
     * średnia
     */
    public function setAverage(): void
    {
        $this->average = round(array_sum($this->arrayVectors) / count($this->arrayVectors), 1);
    }

    /**
     * @return float
     */
    public function getAverage(): float
    {
        return $this->average;
    }

    /**
     * odchylenie standardowe
     */
    public function setDeviationStandard(): void
    {
        foreach ($this->getArrayVectors() as $number) {
            $this->deviationStandard += pow($number - $this->getAverage(), 2);
        }
        $this->deviationStandard = sqrt($this->getDeviationStandard());
    }

    /**
     * @return int
     */
    public function getDeviationStandard(): int
    {
        return $this->deviationStandard;
    }

    /**
     * standaryzacja
     */
    public function setStandardArray(): void
    {
        foreach ($this->getArrayVectors() as $key => $number) {
            $this->standardArray[$key] = round($number - $this->getAverage() / $this->getDeviationStandard(), 2);
        }
    }

    /**
     * @return array
     */
    public function getStandardArray(): array
    {
        return $this->standardArray;
    }

    /**
     * normalizacja
     */
    public function setNormalizeArray(): void
    {
        foreach ($this->getStandardArray() as $key => $number) {
            $this->normalizeArray[$key] = round($number - $this->getMinValue() / ($this->getMaxValue() - $this->getMinValue()), 2);
        }
    }

    /**
     * @return array
     */
    public function getNormalizeArray(): array
    {
        return $this->normalizeArray;
    }
}