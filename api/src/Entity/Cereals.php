<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Cereals
 *
 * @ORM\Table(name="cereals")
 * @ORM\Entity
 */
class Cereals implements JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'cerealName' => $this->cerealName,
            'manufacturer'        => $this->manufacturer,
            'type'        => $this->type,
            'calories'        => $this->calories,
            'protein'        => $this->protein,
            'fat'        => $this->fat,
            'sodium'        => $this->sodium,
            'dietaryFiber'        => $this->dietaryFiber,
            'carbs'        => $this->carbs,
            'sugars'        => $this->sugars,
            'displayShelf'        => $this->displayShelf,
            'potasium'        => $this->potasium,
            'vitamins'        => $this->vitamins,
            'serving'        => $this->serving,
            'cups'        => $this->cups,
        ];
    }


    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cereal_name", type="string", length=27, nullable=true)
     */
    private $cerealName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="manufacturer", type="string", length=27, nullable=true)
     */
    private $manufacturer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=4, nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="calories", type="string", length=8, nullable=true)
     */
    private $calories;

    /**
     * @var string|null
     *
     * @ORM\Column(name="protein", type="string", length=11, nullable=true)
     */
    private $protein;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fat", type="string", length=3, nullable=true)
     */
    private $fat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sodium", type="string", length=6, nullable=true)
     */
    private $sodium;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dietary_fiber", type="string", length=13, nullable=true)
     */
    private $dietaryFiber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="carbs", type="string", length=5, nullable=true)
     */
    private $carbs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sugars", type="string", length=6, nullable=true)
     */
    private $sugars;

    /**
     * @var string|null
     *
     * @ORM\Column(name="display_shelf", type="string", length=13, nullable=true)
     */
    private $displayShelf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="potasium", type="string", length=9, nullable=true)
     */
    private $potasium;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vitamins", type="string", length=21, nullable=true)
     */
    private $vitamins;

    /**
     * @var string|null
     *
     * @ORM\Column(name="serving", type="string", length=19, nullable=true)
     */
    private $serving;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cups", type="string", length=16, nullable=true)
     */
    private $cups;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getCerealName(): ?string
    {
        return $this->cerealName;
    }

    /**
     * @param string|null $cerealName
     */
    public function setCerealName(?string $cerealName): void
    {
        $this->cerealName = $cerealName;
    }

    /**
     * @return string|null
     */
    public function getManufacturer(): ?string
    {
        return $this->manufacturer;
    }

    /**
     * @param string|null $manufacturer
     */
    public function setManufacturer(?string $manufacturer): void
    {
        $this->manufacturer = $manufacturer;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string|null
     */
    public function getCalories(): ?string
    {
        return $this->calories;
    }

    /**
     * @param string|null $calories
     */
    public function setCalories(?string $calories): void
    {
        $this->calories = $calories;
    }

    /**
     * @return string|null
     */
    public function getProtein(): ?string
    {
        return $this->protein;
    }

    /**
     * @param string|null $protein
     */
    public function setProtein(?string $protein): void
    {
        $this->protein = $protein;
    }

    /**
     * @return string|null
     */
    public function getFat(): ?string
    {
        return $this->fat;
    }

    /**
     * @param string|null $fat
     */
    public function setFat(?string $fat): void
    {
        $this->fat = $fat;
    }

    /**
     * @return string|null
     */
    public function getSodium(): ?string
    {
        return $this->sodium;
    }

    /**
     * @param string|null $sodium
     */
    public function setSodium(?string $sodium): void
    {
        $this->sodium = $sodium;
    }

    /**
     * @return string|null
     */
    public function getDietaryFiber(): ?string
    {
        return $this->dietaryFiber;
    }

    /**
     * @param string|null $dietaryFiber
     */
    public function setDietaryFiber(?string $dietaryFiber): void
    {
        $this->dietaryFiber = $dietaryFiber;
    }

    /**
     * @return string|null
     */
    public function getCarbs(): ?string
    {
        return $this->carbs;
    }

    /**
     * @param string|null $carbs
     */
    public function setCarbs(?string $carbs): void
    {
        $this->carbs = $carbs;
    }

    /**
     * @return string|null
     */
    public function getSugars(): ?string
    {
        return $this->sugars;
    }

    /**
     * @param string|null $sugars
     */
    public function setSugars(?string $sugars): void
    {
        $this->sugars = $sugars;
    }

    /**
     * @return string|null
     */
    public function getDisplayShelf(): ?string
    {
        return $this->displayShelf;
    }

    /**
     * @param string|null $displayShelf
     */
    public function setDisplayShelf(?string $displayShelf): void
    {
        $this->displayShelf = $displayShelf;
    }

    /**
     * @return string|null
     */
    public function getPotasium(): ?string
    {
        return $this->potasium;
    }

    /**
     * @param string|null $potasium
     */
    public function setPotasium(?string $potasium): void
    {
        $this->potasium = $potasium;
    }

    /**
     * @return string|null
     */
    public function getVitamins(): ?string
    {
        return $this->vitamins;
    }

    /**
     * @param string|null $vitamins
     */
    public function setVitamins(?string $vitamins): void
    {
        $this->vitamins = $vitamins;
    }

    /**
     * @return string|null
     */
    public function getServing(): ?string
    {
        return $this->serving;
    }

    /**
     * @param string|null $serving
     */
    public function setServing(?string $serving): void
    {
        $this->serving = $serving;
    }

    /**
     * @return string|null
     */
    public function getCups(): ?string
    {
        return $this->cups;
    }

    /**
     * @param string|null $cups
     */
    public function setCups(?string $cups): void
    {
        $this->cups = $cups;
    }



}
