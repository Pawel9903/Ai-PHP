<?php
/**
 * @author Paweł Ged <pawelged9903@gmail.com>
 */

namespace Ai\Classes;

use Ai\Services\Container;
use Ai\Services\VectorService;
use Ai\Traits\ContainerTrait;

class CommandTask2
{
    use ContainerTrait;
    /**
     * @var VectorService
     */
    private $vectorService;

    /**
     * CommandTask2 constructor.
     * @throws \Exception
     */
    public function __construct()
    {
        $this->container = new Container();
        $this->vectorService = $this->container->get('Ai\Services\VectorService');
    }

    public function printMultiplicationScalar()
    {
        echo "iloczyn skalarny: ".json_encode($this->vectorService->getMultiplicationScalar()).PHP_EOL;
    }

    public function printLengthVectors()
    {
        echo "długość wektorów".PHP_EOL;
        echo "1: ".$this->vectorService->getFirstVector()->getLength().PHP_EOL;
        echo "2: ".$this->vectorService->getSecondVector()->getLength().PHP_EOL;
    }

    public function printCosVectors()
    {
        echo "cosinus: {$this->vectorService->getCosines()}".PHP_EOL;
    }

    public function printSinVectors()
    {
        echo "sinus: {$this->vectorService->getSinus()}".PHP_EOL;
    }

    public function printAll()
    {
        $this->printMultiplicationScalar();
        $this->printLengthVectors();
        $this->printCosVectors();
        $this->printSinVectors();
    }
}