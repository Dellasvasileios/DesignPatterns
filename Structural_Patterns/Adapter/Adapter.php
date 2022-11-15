<?php

namespace stuctural\adapter;

require_once dirname(__FILE__) . '\ITarget.php';
require_once dirname(__FILE__) . '\Adaptee.php';

class Adapter implements ITarget
{
    private Adaptee $adaptee;

    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function target_request()
    {
        $this->adaptee->adaptee_request();
    }
}
