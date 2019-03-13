<?php
/**
 * @author Paweł Ged <pawelged9903@gmail.com>
 */

namespace Ai\Factories;

use Ai\Classes\CommandTask1;
use Ai\Classes\CommandTask2;
use Ai\Classes\CommandTask3;
use Ai\Interfaces\CommandFactoryInterface;
use Ai\Services\Container;
use Ai\Traits\ContainerTrait;

class CommandFactory implements CommandFactoryInterface
{
    use ContainerTrait;

    /**
     * @param int $task
     * @return CommandTask1|CommandTask2|CommandTask3
     * @throws \Exception
     */
    public function createCommand(int $task)
    {
        switch ($task) {
            case 1:
                return $this->container->get('Ai\Classes\CommandTask1');
                break;
            case 2:
                return $this->container->get('Ai\Classes\CommandTask2');
                break;
            case 3:
                return $this->container->get('Ai\Classes\CommandTask3');
        }
    }
}