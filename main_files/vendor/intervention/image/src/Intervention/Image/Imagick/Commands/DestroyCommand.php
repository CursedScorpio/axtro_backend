<<<<<<< HEAD
<?php

namespace Intervention\Image\Imagick\Commands;

use Intervention\Image\Commands\AbstractCommand;

class DestroyCommand extends AbstractCommand
{
    /**
     * Destroys current image core and frees up memory
     *
     * @param  \Intervention\Image\Image $image
     * @return boolean
     */
    public function execute($image)
    {
        // destroy image core
        $image->getCore()->clear();

        // destroy backups
        foreach ($image->getBackups() as $backup) {
            $backup->clear();
        }

        return true;
    }
}
=======
<?php

namespace Intervention\Image\Imagick\Commands;

use Intervention\Image\Commands\AbstractCommand;

class DestroyCommand extends AbstractCommand
{
    /**
     * Destroys current image core and frees up memory
     *
     * @param  \Intervention\Image\Image $image
     * @return boolean
     */
    public function execute($image)
    {
        // destroy image core
        $image->getCore()->clear();

        // destroy backups
        foreach ($image->getBackups() as $backup) {
            $backup->clear();
        }

        return true;
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
