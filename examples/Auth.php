<?php

error_reporting(E_ALL);

$test = new \Tellarion\Api\Payeer("", "", "");
echo $test->getAuth();
?>