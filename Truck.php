<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $stockCapacity;
    private int $load = 0;
    private string $energyType;

    public function __construct(string $color, int $nbSeats, string $energyType, int $stockCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energyType = $energyType;
        $this->stockCapacity = $stockCapacity;
    }

    public function getStockCapacity():int
    {
        return $this->stockCapacity;
    }

    public function setStockCapacity($stockCapacity): void
    {
        $this->stockCapacity = $stockCapacity;
    }

    public function getLoad():int
    {
        return $this->load;
    }

    public function setLoad($load): void
    {
        $this->load = $load;
    }

    public function isFull()
    {
        if($this->load == $this->stockCapacity){
            return "full";
        }else{
            return "in filling";
        }
    }
}