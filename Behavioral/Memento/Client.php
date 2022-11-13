<?php

declare(strict_types=1);

require_once "Originator.php";
require_once "Memento.php";
require_once "Caretaker.php";
require_once "ConcreteMemento.php";

$originator = new Originator("Super-duper-super-puper-super.");
$originator->doSomething();
$caretaker = new Caretaker($originator);

echo $originator->getState();

$caretaker->backup();
$originator->doSomething();

$caretaker->backup();
$originator->doSomething();

$caretaker->backup();
$originator->doSomething();

echo "\n";
$caretaker->showHistory();

echo "\nClient: Now, let's rollback!\n\n";
$caretaker->undo();

echo "\nClient: Once more!\n\n";
$caretaker->undo();