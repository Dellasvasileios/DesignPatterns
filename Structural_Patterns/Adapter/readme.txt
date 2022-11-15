It is a design pattern that allows objects with incompatible interfaces to collaborate.

In this Example originally the Client Class collaborates with the target class.

And in the next step i create An adapter class (wrapper) that collaborates with the adaptee class.

The Adapter class is used by the client class but in essence the client class uses the Adaptee.

There is a variation where instead of interfaces inheritance is used by extending the target class.

To run this example just run in the command line php index.php