<<<<<<< HEAD
<?php

namespace Nwidart\Modules\Support\Config;

class GenerateConfigReader
{
    public static function read(string $value): GeneratorPath
    {
        return new GeneratorPath(config("modules.paths.generator.$value"));
    }
}
=======
<?php

namespace Nwidart\Modules\Support\Config;

class GenerateConfigReader
{
    public static function read(string $value): GeneratorPath
    {
        return new GeneratorPath(config("modules.paths.generator.$value"));
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
