<?php
/**
 * Created by PhpStorm.
 * User: pawel
 * Date: 10.03.19
 * Time: 10:00
 */

namespace Classes;

class RandomNumbers
{
    private $numbers = [];
    private $normal = [];
    private $standard = [];
    private $devation = 0;

    public function __construct()
    {
        $this->randomNumbers();
        $this->setDevation();
        $this->setNormalize();
        $this->setStandard();
    }

    /**
     * @param int $from
     * @param int $to
     * @param int $count
     */
    public function randomNumbers($from = 1, $to = 100, $count = 30)
    {
        for($i = 0; $i < $count; $i++)
        {
            $this->numbers[$i] = rand($from, $to);
        }
    }

    /**
     * @return mixed
     */
    public function getMinValue()
    {
        return min($this->numbers);
    }

    /**
     * @return mixed
     */
    public function getMaxValue()
    {
        return max($this->numbers);
    }

    /**
     * @return bool
     */
    public function getArraySort()
    {
        return  sort($this->numbers);
    }

    /**
     * @return float
     */
    public function getAverange()
    {
        return round(array_sum($this->numbers)/count($this->numbers),1);
    }

    /**
     * standardowe odchylenie
     */
    public function setDevation()
    {
        foreach($this->numbers as $number) {
            $this->devation += pow($number - $this->getAverange(),2);
        }
        $this->devation = sqrt($this->devation);
    }

    /**
     * @return int
     */
    public function getDevation()
    {
        return $this->devation;
    }


    /**
     * normalizacja
     */
    public function setNormalize()
    {
        foreach ($this->numbers as $key => $number)
        {
            $this->normal[$key] = round($number - $this->getMinValue() / ($this->getMaxValue() - $this->getMinValue()),2);
        }
    }

    /**
     * standaryzacja
     */
    public function setStandard()
    {
        foreach ($this->numbers as $key => $number)
        {
            $this->standard[$key] = round($number - $this->getAverange() / $this->getDevation(),2);
        }
    }

    /**
     * @return array
     */
    public function getNormal()
    {
        return $this->normal;
    }

    /**
     * @return array
     */
    public function getStandard()
    {
        return $this->standard;
    }

}