<?php
/**
 * @author Paweł Ged <pawelged9903@gmail.com>
 */

namespace App\Service;

use App\Utils\Vector;

class VectorActionsService
{
    /**
     * @var Vector
     */
    private $vector;

    private $repeatArrayNumbers = array();

    /**
     * VectorActionsService constructor.
     * @param Vector $vector
     */
    public function __construct(Vector $vector)
    {
        $this->vector = $vector;
    }


    public function setCountRepeatArray():void
    {
        for($i = $this->vector->getMinValue(); $i<= $this->vector->getMaxValue(); $i++)
        {
            $this->repeatArrayNumbers[$i] = 0;
        }
    }


    public function countRepeatNumbers(): array
    {
        $this->setCountRepeatArray();

        foreach ($this->vector->getArrayVectors() as $item)
        {
            $this->repeatArrayNumbers[$item]++;
        }

        return $this->getRepeatArrayNumbers();
    }

    /**
     * @return array
     */
    public function getRepeatArrayNumbers(): array
    {
        return $this->repeatArrayNumbers;
    }

}