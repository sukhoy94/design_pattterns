## Wzorzec Pamiątka składa się z:

klasy Originator z metodami CreateMemento i SetMemento,

klasy Memento zawierającej metody SetState oraz GetState, umożliwiających obiektowi odpowiednio zapisanie swojego stanu do pamiątki albo pobranie zapisanego stanu obiektu, dla którego została stworzona pamiątka,

klasy Caretaker, która odpowiada za przechowywanie stworzonych pamiątek.