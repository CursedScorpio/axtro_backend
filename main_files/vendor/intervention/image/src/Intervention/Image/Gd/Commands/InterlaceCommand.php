<<<<<<< HEAD
<?php

namespace Intervention\Image\Gd\Commands;

use Intervention\Image\Commands\AbstractCommand;

class InterlaceCommand extends AbstractCommand
{
    /**
     * Toggles interlaced encoding mode
     *
     * @param  \Intervention\Image\Image $image
     * @return boolean
     */
    public function execute($image)
    {
        $mode = $this->argument(0)->type('bool')->value(true);

        imageinterlace($image->getCore(), $mode);

        return true;
    }
}
=======
<?php

namespace Intervention\Image\Gd\Commands;

use Intervention\Image\Commands\AbstractCommand;

class InterlaceCommand extends AbstractCommand
{
    /**
     * Toggles interlaced encoding mode
     *
     * @param  \Intervention\Image\Image $image
     * @return boolean
     */
    public function execute($image)
    {
        $mode = $this->argument(0)->type('bool')->value(true);

        imageinterlace($image->getCore(), $mode);

        return true;
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
