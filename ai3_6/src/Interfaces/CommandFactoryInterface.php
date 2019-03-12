<?php
/**
 * @author Paweł Ged <pawelged9903@gmail.com>
 */

namespace Ai\Interfaces;

interface CommandFactoryInterface{
    public function createCommand(int $type);
}