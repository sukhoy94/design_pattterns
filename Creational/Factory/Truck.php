<?php


class Truck implements Transport
{
    
    public function deliver(): void
    {
        echo 'deliver by ground';
    }
}