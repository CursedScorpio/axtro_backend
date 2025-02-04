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

namespace Psy\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * A dumb little command for printing out the current Psy Shell version.
 */
class PsyVersionCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('version')
            ->setDefinition([])
            ->setDescription('Show Psy Shell version.')
            ->setHelp('Show Psy Shell version.');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln($this->getApplication()->getVersion());

        return 0;
    }
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

namespace Psy\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * A dumb little command for printing out the current Psy Shell version.
 */
class PsyVersionCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('version')
            ->setDefinition([])
            ->setDescription('Show Psy Shell version.')
            ->setHelp('Show Psy Shell version.');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln($this->getApplication()->getVersion());

        return 0;
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
