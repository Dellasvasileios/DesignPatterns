<?php

namespace behavioral\iterator;

require_once dirname(__FILE__) . '/CollectionObject.php';

interface IIterator
{
    public function get_next(): CollectionObject;
    public function has_next(): bool;
}
