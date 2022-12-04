<?php

namespace behavioral\iterator;

require_once dirname(__FILE__) . '/IIterableCollection.php';
require_once dirname(__FILE__) . '/CollectionObject.php';
require_once dirname(__FILE__) . '/IIterator.php';

class ConcreteIterator implements IIterator
{
    private $list;
    private $index;
    private $list_length;

    public function __construct($list)
    {
        $this->list = $list;
        $this->index = -1;
        $this->list_length = count($this->list) - 1;
    }

    public function get_next() : CollectionObject{
        return $this->list[++$this->index];
    }

    public function has_next() : bool{
        
        $next_position = $this->index + 1;

        if($next_position > $this->list_length){
            return false;
        }
        else{
            return true;
        }

    }
}
