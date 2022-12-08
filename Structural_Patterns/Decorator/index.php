<?php

namespace structural\Decorator;

require_once dirname(__FILE__) . '\Component.php';
require_once dirname(__FILE__) . '\ConcreteDecorator1.php';
require_once dirname(__FILE__) . '\ConcreteDecorator2.php';

$component = new Component();
$concreteDecorator1 = new ConcreteDecorator1($component);
$concreteDecorator2 = new ConcreteDecorator2($concreteDecorator1);

$concreteDecorator2->execute();
