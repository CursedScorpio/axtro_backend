<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace NunoMaduro\Collision\Contracts\Adapters\Phpunit;

use PHPUnit\Framework\Test;
use PHPUnit\Framework\TestListener;

/**
 * @internal
 */
interface Listener extends TestListener
{
    /**
     * Renders the provided error
     * on the console.
     *
     * @return void
     */
    public function render(Test $test, \Throwable $t);
}
=======
<?php

declare(strict_types=1);

namespace NunoMaduro\Collision\Contracts\Adapters\Phpunit;

use PHPUnit\Framework\Test;
use PHPUnit\Framework\TestListener;

/**
 * @internal
 */
interface Listener extends TestListener
{
    /**
     * Renders the provided error
     * on the console.
     *
     * @return void
     */
    public function render(Test $test, \Throwable $t);
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
