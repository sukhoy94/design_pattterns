<?php


abstract class TransportFactory
{
    abstract public function createTransport(): Transport;
}