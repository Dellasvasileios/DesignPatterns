<?php

namespace behavioral\observer;

require_once dirname(__FILE__) . '/Observer.php';
require_once dirname(__FILE__) . '/Observerable.php';
require_once dirname(__FILE__) . '/IObserver.php';
require_once dirname(__FILE__) . '/IObserverable.php';

$observer1 = new Observer();

$observer2 = new Observer();

$observer3 = new Observer();

$observerable = new Observerable();

$observerable->enrollObserver($observer1);
$observerable->enrollObserver($observer2);
$observerable->enrollObserver($observer3);

$observerable->notifyObservers();
