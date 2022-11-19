<?php

namespace behavioral\observer;

require_once dirname(__FILE__) . '/IObserver.php';

class Observer implements IObserver
{
    public function notify($data)
    {
        echo $data ." ";
    }
}
