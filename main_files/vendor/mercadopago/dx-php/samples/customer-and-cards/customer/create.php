<<<<<<< HEAD
<?php

    require_once dirname(__FILE__).'/../../index.php';

    $customer = new MercadoPago\Customer();
    $customer->email = "your.payer@email.com";
    $customer->save();

    echo "Customer ID: " . $customer->id;

?>
=======
<?php

    require_once dirname(__FILE__).'/../../index.php';

    $customer = new MercadoPago\Customer();
    $customer->email = "your.payer@email.com";
    $customer->save();

    echo "Customer ID: " . $customer->id;

?>
>>>>>>> 0aeda949 (Updating backend files in main_files)
