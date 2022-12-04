<?php

namespace behavioral\iterator;

require_once dirname(__FILE__) . '/IIterator.php';

interface IIterableCollection
{
    public function create_iterator(): IIterator;
}
