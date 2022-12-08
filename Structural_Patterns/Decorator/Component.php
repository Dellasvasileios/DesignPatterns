<?php

namespace structural\Decorator;

require_once dirname(__FILE__) . '\IComponent.php';

class Component implements IComponent{
    public function execute(){
        echo "I am Component class ";
    }
}
