<<<<<<< HEAD
<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\MockObject;

use function sprintf;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvalidMethodNameException extends \PHPUnit\Framework\Exception implements Exception
{
    public function __construct(string $method)
    {
        parent::__construct(
            sprintf(
                'Cannot double method with invalid name "%s"',
                $method,
            ),
        );
    }
}
=======
<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\MockObject;

use function sprintf;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvalidMethodNameException extends \PHPUnit\Framework\Exception implements Exception
{
    public function __construct(string $method)
    {
        parent::__construct(
            sprintf(
                'Cannot double method with invalid name "%s"',
                $method,
            ),
        );
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
