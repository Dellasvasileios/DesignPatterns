<?php

namespace structural\Decorator;

require_once dirname(__FILE__) . '\IComponent.php';

class BaseDecorator implements IComponent{
    
    private $wrapee;

    public function __construct(Icomponent $wrapee){
        $this->wrapee = $wrapee;
    }
    
    public function execute(){
        $this->wrapee->execute();
    }
}