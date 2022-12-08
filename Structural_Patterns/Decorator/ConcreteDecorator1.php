<?php

namespace structural\Decorator;

require_once dirname(__FILE__) . '\BaseDecorator.php';
require_once dirname(__FILE__) . '\IComponent.php';

class ConcreteDecorator1 extends BaseDecorator{
    
    public function __construct(IComponent $wrapee){
        parent::__construct($wrapee);
    }
    
    public function execute(){
        parent::execute();
        self::extra_function();
    }

    public function extra_function(){
        echo " concreteDecorator1 extra_function ";
    }
}