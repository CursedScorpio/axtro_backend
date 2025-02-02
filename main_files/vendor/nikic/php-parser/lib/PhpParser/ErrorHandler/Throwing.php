<<<<<<< HEAD
<?php declare(strict_types=1);

namespace PhpParser\ErrorHandler;

use PhpParser\Error;
use PhpParser\ErrorHandler;

/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements ErrorHandler {
    public function handleError(Error $error): void {
        throw $error;
    }
}
=======
<?php declare(strict_types=1);

namespace PhpParser\ErrorHandler;

use PhpParser\Error;
use PhpParser\ErrorHandler;

/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements ErrorHandler {
    public function handleError(Error $error): void {
        throw $error;
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
