<?php
/**
 * @author Paweł Ged <pawelged9903@gmail.com>
 */

namespace Ai\Interfaces;

interface CommandCreatorInterface{
    public function createCommand(int $type);
}