<?php


class SayHelloCommand implements Command
{
    
    public function execute(): void
    {
        echo "Hello!";
    }
}