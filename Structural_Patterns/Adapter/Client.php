<?php

namespace stuctural\adapter;

require_once dirname(__FILE__) . '\ITarget.php';

class Client
{
    private Itarget $target;

    public function __construct(ITarget $target)
    {
        $this->target = $target;
    }

    public function request()
    {
        $this->target->target_request();
    }
}
