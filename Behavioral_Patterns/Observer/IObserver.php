<?php

namespace behavioral\observer;

interface IObserver
{
    public function notify($data);
}
