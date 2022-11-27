<?php

declare(strict_types=1);

namespace Patterns\Structural\Proxy;


class Client
{
    public function run()
    {
        echo "Client: Executing the client code with a real subject:\n";
        $realSubject = new RealSubject();
        $this->handleSubject($realSubject);
    
        echo "\n";
    
        echo "Client: Executing the same client code with a proxy:\n";
        $proxy = new Proxy($realSubject);
        $this->handleSubject($proxy);        
    }
    
    public function handleSubject(Subject $subject)
    {
        $subject->request();        
    }
}