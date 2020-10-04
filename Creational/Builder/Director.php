<?php


class Director
{
    private $houseBuilder;
    
    public function setHouseBuilder(HouseBuilder $builder)
    {
        $this->houseBuilder = $builder;
    }
    public function getHouse()
    {
        return $this->houseBuilder->getHouse();
    }
    
    public function constructHouse() {
        $this->houseBuilder->createNewHouse();
        $this->houseBuilder->makeWall();
        $this->houseBuilder->makeRoof();
        $this->houseBuilder->makePool();    
    }
}