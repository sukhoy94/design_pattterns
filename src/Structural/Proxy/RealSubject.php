<?php

declare(strict_types=1);


namespace Patterns\Structural\Proxy;


class RealSubject implements Subject
{
    
    public function request(): void
    {
        echo "RealSubject: Handling request.\n";
    }
}