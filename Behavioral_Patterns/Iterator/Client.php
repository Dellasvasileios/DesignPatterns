<?php

namespace behavioral\iterator;

require_once dirname(__FILE__) . '/IIterableCollection.php';

class Client
{
    public $iiterable_collection;

    public function __construct(IIterableCollection $iiterable_collection)
    {
        $this->iiterable_collection = $iiterable_collection;
    }

    public function action_one()
    {
        $iterator = $this->iiterable_collection->create_iterator();

        while ($iterator->has_next()) {
            $collection_object = $iterator->get_next();

            echo $collection_object->get_i();
        }
    }
}
