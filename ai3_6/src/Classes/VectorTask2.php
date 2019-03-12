<?php
/**
 * @author Paweł Ged <pawelged9903@gmail.com>
 */
namespace Ai\Classes;

class VectorTask2 extends Vector
{

    private $length = 0;

    public function __construct(int $arrayLength = 10, int $from = 0, int $to = 20)
    {
        parent::__construct($arrayLength, $from, $to);

        $this->setLength();
    }

    /**
     * długość wektora
     */
    public function setLength()
    {
        foreach ($this->getArrayVectors() as $vector)
        {
            $this->length += pow($vector, 2);
        }

        $this->length = sqrt($this->length);
    }

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }
}