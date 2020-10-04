<?php


abstract class HouseBuilder
{
    protected $house;    
    
    public function getHouse()
    {
        return $this->house;
    }
    
    public function createNewHouse()
    {
        $this->house = new House();
    }
    
    abstract public function makeWall();
    abstract public function makeRoof();
    abstract public function makePool();
}