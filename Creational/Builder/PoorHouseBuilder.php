<?php


class PoorHouseBuilder extends HouseBuilder
{
    
    public function makeWall()
    {
        $this->house->makeWall('Poor');
    }
    
    public function makeRoof()
    {
        $this->house->makeRoof('Poor');
    }
    
    public function makePool()
    {
        $this->house->makePool('No pool. You are poor !');
    }
}