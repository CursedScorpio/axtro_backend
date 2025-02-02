<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace NunoMaduro\Collision\Contracts;

/**
 * @internal
 */
interface Provider
{
    /**
     * Registers the current Handler as Error Handler.
     *
     * @return \NunoMaduro\Collision\Contracts\Provider
     */
    public function register(): Provider;

    /**
     * Returns the handler.
     *
     * @return \NunoMaduro\Collision\Contracts\Handler
     */
    public function getHandler(): Handler;
}
=======
<?php

declare(strict_types=1);

namespace NunoMaduro\Collision\Contracts;

/**
 * @internal
 */
interface Provider
{
    /**
     * Registers the current Handler as Error Handler.
     *
     * @return \NunoMaduro\Collision\Contracts\Provider
     */
    public function register(): Provider;

    /**
     * Returns the handler.
     *
     * @return \NunoMaduro\Collision\Contracts\Handler
     */
    public function getHandler(): Handler;
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
