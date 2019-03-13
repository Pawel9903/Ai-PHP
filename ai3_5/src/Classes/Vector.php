<?php

/**
 * @author Paweł Ged <pawelged9903@gmail.com>
 */

namespace Ai\Classes;

abstract class Vector
{
    /**
     * @var array
     */
    protected $arrayVectors = [];

    /**
     * Vector constructor.
     * @param int $arrayLength
     * @param int $from
     * @param int $to
     */
    public function __construct(int $arrayLength = 30,int $from = 1,int $to = 30)
    {
        $this->setArrayVectors($arrayLength, $from, $to);
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
}