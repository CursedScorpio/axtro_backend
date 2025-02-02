<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace NunoMaduro\Collision\Contracts;

use Spatie\Ignition\Contracts\Solution;
use Throwable;

/**
 * @internal
 */
interface SolutionsRepository
{
    /**
     * Gets the solutions from the given `$throwable`.
     *
     * @return array<int, Solution>
     */
    public function getFromThrowable(Throwable $throwable): array;
}
=======
<?php

declare(strict_types=1);

namespace NunoMaduro\Collision\Contracts;

use Spatie\Ignition\Contracts\Solution;
use Throwable;

/**
 * @internal
 */
interface SolutionsRepository
{
    /**
     * Gets the solutions from the given `$throwable`.
     *
     * @return array<int, Solution>
     */
    public function getFromThrowable(Throwable $throwable): array;
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
