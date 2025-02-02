<<<<<<< HEAD
<?php

error_reporting(E_ALL | E_STRICT);

require __DIR__ . '/../vendor/autoload.php';

if (defined('E_DEPRECATED')) {
    error_reporting(error_reporting() | E_DEPRECATED);
}

Hamcrest\Util::registerGlobalFunctions();
=======
<?php

error_reporting(E_ALL | E_STRICT);

require __DIR__ . '/../vendor/autoload.php';

if (defined('E_DEPRECATED')) {
    error_reporting(error_reporting() | E_DEPRECATED);
}

Hamcrest\Util::registerGlobalFunctions();
>>>>>>> 0aeda949 (Updating backend files in main_files)
