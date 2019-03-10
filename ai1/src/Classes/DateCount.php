<?php

namespace Classes;

use DateTime;

/**
 * Created by PhpStorm.
 * User: pawel
 * Date: 10.03.19
 * Time: 08:24
 */

class DateCount
{

    private $datetime;
    private $dayOfYear;

    public function __construct()
    {
        $this->datetime = new DateTime();
    }

    /**
     * liczy numer dnia w roku
     */
    public function countNumberDay()
    {
        $firstYearDay = new DateTime($this->datetime->format('Y').'-01-01');
        $this->dayOfYear = $this->datetime->diff($firstYearDay)->days+1;
    }

    /**
     * @return mixed
     */
    public function getDayOfYear()
    {
        return $this->dayOfYear;
    }

    /**
     * @return DateTime
     */
    public function getDatetime()
    {
        return $this->datetime;
    }


    public function printDate()
    {
        echo PHP_EOL."Dzisiaj jest {$this->getDayOfYear()} dzień {$this->getDatetime()->format('Y')} roku".PHP_EOL;
    }
}