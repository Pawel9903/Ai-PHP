<?php
/**
 * @author Paweł Ged <pawelged9903@gmail.com>
 */

namespace Ai\Classes;

use Ai\Interfaces\CommandCreatorInterface;

class CommandCreator implements CommandCreatorInterface
{
    /**
     * @param int $task
     * @return CommandTask1|CommandTask2|CommandTask3
     */
    public function createCommand(int $task)
    {
        switch ($task) {
            case 1:
                return new CommandTask1();
                break;
            case 2:
                return new CommandTask2();
                break;
            case 3:
                return new CommandTask3();
        }
    }
}