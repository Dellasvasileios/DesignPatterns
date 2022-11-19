<?php

namespace behavioral\observer;

require_once dirname(__FILE__) . '/IObserver.php';

interface IObserverable
{
    public function enrollObserver(IObserver $observer);
    public function removeObserver(IObserver $observer);
    public function notifyObservers();
}
