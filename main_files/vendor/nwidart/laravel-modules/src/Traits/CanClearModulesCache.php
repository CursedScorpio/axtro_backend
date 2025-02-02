<<<<<<< HEAD
<?php

namespace Nwidart\Modules\Traits;

trait CanClearModulesCache
{
    /**
     * Clear the modules cache if it is enabled
     */
    public function clearCache()
    {
        if (config('modules.cache.enabled') === true) {
            app('cache')->forget(config('modules.cache.key'));
        }
    }
}
=======
<?php

namespace Nwidart\Modules\Traits;

trait CanClearModulesCache
{
    /**
     * Clear the modules cache if it is enabled
     */
    public function clearCache()
    {
        if (config('modules.cache.enabled') === true) {
            app('cache')->forget(config('modules.cache.key'));
        }
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
