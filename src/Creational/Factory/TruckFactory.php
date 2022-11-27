<?php


class TruckFactory extends TransportFactory
{
    
    public function createTransport(): Transport
    {
        return new Truck();
    }
}