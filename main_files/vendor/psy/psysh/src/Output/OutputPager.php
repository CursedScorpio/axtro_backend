<<<<<<< HEAD
<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2023 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\Output;

use Symfony\Component\Console\Output\OutputInterface;

/**
 * An output pager is much the same as a regular OutputInterface, but allows
 * the stream to be flushed to a pager periodically.
 */
interface OutputPager extends OutputInterface
{
    /**
     * Close the current pager process.
     */
    public function close();
}
=======
<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2023 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\Output;

use Symfony\Component\Console\Output\OutputInterface;

/**
 * An output pager is much the same as a regular OutputInterface, but allows
 * the stream to be flushed to a pager periodically.
 */
interface OutputPager extends OutputInterface
{
    /**
     * Close the current pager process.
     */
    public function close();
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
