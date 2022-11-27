<?php


class Ship implements Transport
{
    public function deliver(): void
    {
        echo 'deliver by sea';
    }
}