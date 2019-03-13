<?php
/**
 * @author Paweł Ged <pawelged9903@gmail.com>
 */

namespace Ai\Services;

use Ai\Classes\VectorTask1;
use Ai\Classes\VectorTask2;
use Ai\Traits\ContainerTrait;

class VectorService
{
    use ContainerTrait;

    /**
     * @var VectorTask2
     */
    private $firstVector;

    /**
     * @var VectorTask2
     */
    private $secondVector;

    /**
     * @var array
     */
    private $multiplicationScalar = array();

    /**
     * @var float
     */
    private $cosines;
    /**
     * VectorService constructor.
     * @throws \Exception
     */
    public function __construct()
    {
        $this->container = new Container();

        $this->firstVector = $this->container->get('Ai\Classes\VectorTask2');
        $this->secondVector = $this->container->get('Ai\Classes\VectorTask2');

        $this->setMultiplicationScalar();
        $this->setCosines();
    }

    public function setMultiplicationScalar()
    {
        foreach ($this->firstVector->getArrayVectors() as $key => $vector)
        {
            $this->multiplicationScalar[$key] = $vector * $this->getSecondVector()->getArrayVectors()[$key];
        }
    }

    /**
     * @return array
     */
    public function getMultiplicationScalar(): array
    {
        return $this->multiplicationScalar;
    }

    /**
     *
     */
    public function setCosines(): void
    {
        $this->cosines = array_sum($this->getMultiplicationScalar())/($this->getFirstVector()->getLength() * $this->getSecondVector()->getLength());
    }

    /**
     * @return float
     */
    public function getSinus()
    {
        return sqrt(1 - pow($this->cosines,2));
    }

    /**
     * @return float
     */
    public function getCosines(): float
    {
        return $this->cosines;
    }

    /**
     * @return VectorTask2
     */
    public function getFirstVector(): VectorTask2
    {
        return $this->firstVector;
    }

    /**
     * @return VectorTask2
     */
    public function getSecondVector(): VectorTask2
    {
        return $this->secondVector;
    }

}