<?php 

namespace behavioral\iterator;

require_once dirname(__FILE__) . '/ConcreteCollection.php';
require_once dirname(__FILE__) . '/CollectionObject.php';
require_once dirname(__FILE__) . '/Client.php';


//create a collection 
$concrete_collection = new ConcreteCollection();

$collectionObject = new CollectionObject();
$collectionObject->set_i(1);
$concrete_collection->push($collectionObject);

$collectionObject = new CollectionObject();
$collectionObject->set_i(2);
$concrete_collection->push($collectionObject);

$collectionObject = new CollectionObject();
$collectionObject->set_i(3);
$concrete_collection->push($collectionObject);

$collectionObject = new CollectionObject();
$collectionObject->set_i(4);
$concrete_collection->push($collectionObject);

//the client uses the collection

$client = new Client($concrete_collection);

$client->action_one();
