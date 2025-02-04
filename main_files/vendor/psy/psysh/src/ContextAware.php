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

namespace Psy;

/**
 * ContextAware interface.
 *
 * This interface is used to pass the Shell's context into commands and such
 * which require access to the current scope variables.
 */
interface ContextAware
{
    /**
     * Set the Context reference.
     *
     * @param Context $context
     */
    public function setContext(Context $context);
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

namespace Psy;

/**
 * ContextAware interface.
 *
 * This interface is used to pass the Shell's context into commands and such
 * which require access to the current scope variables.
 */
interface ContextAware
{
    /**
     * Set the Context reference.
     *
     * @param Context $context
     */
    public function setContext(Context $context);
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
