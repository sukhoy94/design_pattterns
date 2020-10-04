<?php


class RichHouseBuilder extends HouseBuilder
{
    public function makeWall()
    {
        $this->house->makeWall('Gold');
    }
    
    public function makeRoof()
    {
        $this->house->makeRoof('Gold');
    }
    
    public function makePool()
    {
        $this->house->makePool('Gold');
    }
}