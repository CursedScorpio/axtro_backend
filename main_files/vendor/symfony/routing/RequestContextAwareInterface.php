<<<<<<< HEAD
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Routing;

interface RequestContextAwareInterface
{
    /**
     * Sets the request context.
     *
     * @return void
     */
    public function setContext(RequestContext $context);

    /**
     * Gets the request context.
     */
    public function getContext(): RequestContext;
}
=======
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Routing;

interface RequestContextAwareInterface
{
    /**
     * Sets the request context.
     *
     * @return void
     */
    public function setContext(RequestContext $context);

    /**
     * Gets the request context.
     */
    public function getContext(): RequestContext;
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
