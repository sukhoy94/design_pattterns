<?php


class ShipFactory extends TransportFactory 
{
    
    public function createTransport(): Transport
    {
        return new Ship();
    }
}