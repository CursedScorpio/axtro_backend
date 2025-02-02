<<<<<<< HEAD
<?php

declare(strict_types=1);

/*
 * This file is part of the league/config package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\Config;

/**
 * Implement this class to facilitate setter injection of the configuration where needed
 */
interface ConfigurationAwareInterface
{
    public function setConfiguration(ConfigurationInterface $configuration): void;
}
=======
<?php

declare(strict_types=1);

/*
 * This file is part of the league/config package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\Config;

/**
 * Implement this class to facilitate setter injection of the configuration where needed
 */
interface ConfigurationAwareInterface
{
    public function setConfiguration(ConfigurationInterface $configuration): void;
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
