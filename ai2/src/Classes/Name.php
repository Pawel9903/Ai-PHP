<?php
/**
 * Created by PhpStorm.
 * User: pawel
 * Date: 10.03.19
 * Time: 09:16
 */

namespace Classes;

class Name
{
    private $name;
    private $surname;

    public function __construct($nameAndSurnameString)
    {
        $this->separateNameAndSurname($nameAndSurnameString);
    }

    /**
     * @param $nameAndSurnameString
     */
    public function separateNameAndSurname($nameAndSurnameString)
    {
        $this->name = explode(" ", $nameAndSurnameString)[0];
        $this->surname = explode(" ", $nameAndSurnameString)[1];
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }
}