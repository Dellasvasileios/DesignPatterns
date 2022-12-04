<?php

namespace behavioral\iterator;

require_once dirname(__FILE__) . '/IIterableCollection.php';
require_once dirname(__FILE__) . '/ConcreteIterator.php';
require_once dirname(__FILE__) . '/CollectionObject.php';

class ConcreteCollection implements IIterableCollection
{

    private $list;

    public function __construct(){
        $this->list = [];
    }

    public function create_iterator() : IIterator
    {
        return new ConcreteIterator($this->list);
    }

    public function push(CollectionObject $obj){
        $this->list[] = $obj;
    }

    public function pop() : CollectionObject{
        return array_pop($this->list);
    }
}
