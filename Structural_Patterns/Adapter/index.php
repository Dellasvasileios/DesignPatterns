<?php

use stuctural\adapter\Target;
use stuctural\adapter\Client;
use stuctural\adapter\Adapter;
use stuctural\adapter\Adaptee;

require_once dirname(__FILE__). "\Client.php";
require_once dirname(__FILE__) . '\Target.php';
require_once dirname(__FILE__) . '\Adapter.php';
require_once dirname(__FILE__) . '\Adaptee.php';


$target = new Target();
$client = new Client($target);

$client->request();

$adaptee = new Adaptee();
$adapter = new Adapter($adaptee);
$client = new Client($adapter);
$client->request();
