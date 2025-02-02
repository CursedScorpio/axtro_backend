<<<<<<< HEAD
<?php

namespace Nwidart\Modules\Exceptions;

class InvalidAssetPath extends \Exception
{
    public static function missingModuleName($asset)
    {
        return new static("Module name was not specified in asset [$asset].");
    }
}
=======
<?php

namespace Nwidart\Modules\Exceptions;

class InvalidAssetPath extends \Exception
{
    public static function missingModuleName($asset)
    {
        return new static("Module name was not specified in asset [$asset].");
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
