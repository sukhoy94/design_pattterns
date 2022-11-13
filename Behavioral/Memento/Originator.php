<?php

declare(strict_types=1);


class Originator
{
    private $state;    
    
    
    public function __construct($state)
    {
        
        $this->state = $state;
        echo "Originator says: my original state is: {$this->state}\n";
    }
    
    
    public function doSomething(): void
    {
        echo "Origiantor: I'm doing something. \n";
        $this->state = $this->generateNewState();
        echo "Originator: and my state has changed to: {$this->state}\n";
    }
    
    public function generateNewState()
    {
        return substr(
            str_shuffle(
                str_repeat(
                    $x = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
                    (int) ceil(10 / strlen($x))
                )
            ),
            1,
            10,
        );
    }
    
    public function save(): Memento
    {
        return new ConcreteMemento($this->state);
    }
    
    public function restore(Memento $memento): void
    {
        $this->state = $memento->getState();
        echo "Originator: My state has changed to: {$this->state}\n";    
    }
    
    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }
}