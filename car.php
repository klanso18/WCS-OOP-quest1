<?php 

class Car
{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color; 
    private int $nbSeats;
    private string $energy;
    private int $energyLevel; 

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward(): string
    {
        $this->currentSpeed = 50; 
        return "Go !"; 
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

    public function start(): string
    {
        $sentence = "";
        while ($this->energyLevel > 0) {
            $sentence .= "Start !";
        }
        $sentence .= "Not enough energy to start"; 
        return $sentence; 
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels = 4;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel = 50;
    }

   
}