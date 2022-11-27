<?php


class House
{
    protected $wall;
    protected $roof;
    protected $pool;
        
    public function makeWall($wall)
    {
        $this->wall = $wall;
    }
    
    public function makeRoof($roof)
    {
        $this->roof = $roof;
    }
    
    public function makePool($pool)
    {
        $this->pool = $pool;
    }
}