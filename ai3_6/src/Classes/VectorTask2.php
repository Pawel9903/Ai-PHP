<?php
/**
 * @author Paweł Ged <pawelged9903@gmail.com>
 */
use Ai\Classes\Vector;

class VectorTask2 extends Vector
{
   public function __construct(int $arrayLength = 10, int $from = 0, int $to = 20)
   {
       parent::__construct($arrayLength, $from, $to);
   }
}