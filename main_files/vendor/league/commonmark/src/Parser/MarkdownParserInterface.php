<<<<<<< HEAD
<?php

declare(strict_types=1);

/*
 * This file is part of the league/commonmark package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark\Parser;

use League\CommonMark\Exception\CommonMarkException;
use League\CommonMark\Node\Block\Document;

interface MarkdownParserInterface
{
    /**
     * @throws CommonMarkException
     */
    public function parse(string $input): Document;
}
=======
<?php

declare(strict_types=1);

/*
 * This file is part of the league/commonmark package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark\Parser;

use League\CommonMark\Exception\CommonMarkException;
use League\CommonMark\Node\Block\Document;

interface MarkdownParserInterface
{
    /**
     * @throws CommonMarkException
     */
    public function parse(string $input): Document;
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
