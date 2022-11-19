<?php

namespace behavioral\observer;

require_once dirname(__FILE__) . '/IObserverable.php';


/**
 * Observerable
 */
class Observerable implements IObserverable
{
    /**
     * observers
     *
     * @var array IObserver
     */
    private $observers = array();

    public function enrollObserver(IObserver $observer)
    {
        array_push($this->observers, $observer);
    }

    /**
     * removeObserver
     *
     * @param  IObserver $remove_observer
     * @return void
     */
    public function removeObserver(IObserver $remove_observer)
    {
        foreach ($this->observers as $key => $observer) {
            if ($observer === $remove_observer) {
                unset($this->observers[$key]);
            }
        }
    }

    /**
     * notifyObservers
     *
     * @return void
     */
    public function notifyObservers()
    {
        foreach ($this->observers as $key => $observer) {
            $observer->notify("notification1");
        }
    }
}
