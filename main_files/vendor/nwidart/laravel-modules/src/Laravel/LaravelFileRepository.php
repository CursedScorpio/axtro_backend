<<<<<<< HEAD
<?php

namespace Nwidart\Modules\Laravel;

use Nwidart\Modules\FileRepository;

class LaravelFileRepository extends FileRepository
{
    /**
     * {@inheritdoc}
     */
    protected function createModule(...$args)
    {
        return new Module(...$args);
    }
}
=======
<?php

namespace Nwidart\Modules\Laravel;

use Nwidart\Modules\FileRepository;

class LaravelFileRepository extends FileRepository
{
    /**
     * {@inheritdoc}
     */
    protected function createModule(...$args)
    {
        return new Module(...$args);
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
