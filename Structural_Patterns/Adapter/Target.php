<?php

namespace stuctural\adapter;

require_once dirname(__FILE__) . '\ITarget.php';

class Target implements ITarget
{
    public function target_request()
    {
        echo "Target Class Request";
        echo "\n";
    }
}
