<<<<<<< HEAD
<?php

require_once('config.php');

# create request class
$request = new \Iyzipay\Request\UCSInitializeRequest();
$request->setEmail("email@iyzico.com");
$request->setGsmNumber("+905555555555");

# make request
$result = \Iyzipay\Model\UCSInitialize::create($request, Config::options());

# print result
=======
<?php

require_once('config.php');

# create request class
$request = new \Iyzipay\Request\UCSInitializeRequest();
$request->setEmail("email@iyzico.com");
$request->setGsmNumber("+905555555555");

# make request
$result = \Iyzipay\Model\UCSInitialize::create($request, Config::options());

# print result
>>>>>>> 0aeda949 (Updating backend files in main_files)
print_r($result);