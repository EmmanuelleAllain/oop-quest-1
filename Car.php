<?php

class Car 
{
    private int $nbWheels = 4;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energyType;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energyType)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energyType = $energyType;
    }

    public function setNbWheels(int $nbWheels = 4): void
    {
        $this->nbWheels = $nbWheels;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }

    public function start(): string
    {
        if($this->currentSpeed == 0) {
            return "Engine starting ! <br>";
            }
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go! <br>";
    }

    public function brake(): string
    {   
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
            return $sentence;
    }

}