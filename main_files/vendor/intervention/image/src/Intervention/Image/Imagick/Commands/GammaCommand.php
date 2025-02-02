<<<<<<< HEAD
<?php

namespace Intervention\Image\Imagick\Commands;

use Intervention\Image\Commands\AbstractCommand;

class GammaCommand extends AbstractCommand
{
    /**
     * Applies gamma correction to a given image
     *
     * @param  \Intervention\Image\Image $image
     * @return boolean
     */
    public function execute($image)
    {
        $gamma = $this->argument(0)->type('numeric')->required()->value();

        return $image->getCore()->gammaImage($gamma);
    }
}
=======
<?php

namespace Intervention\Image\Imagick\Commands;

use Intervention\Image\Commands\AbstractCommand;

class GammaCommand extends AbstractCommand
{
    /**
     * Applies gamma correction to a given image
     *
     * @param  \Intervention\Image\Image $image
     * @return boolean
     */
    public function execute($image)
    {
        $gamma = $this->argument(0)->type('numeric')->required()->value();

        return $image->getCore()->gammaImage($gamma);
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
