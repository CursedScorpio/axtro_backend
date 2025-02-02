<<<<<<< HEAD
<?php

/**
 * Mockery (https://docs.mockery.io/)
 *
 * @copyright https://github.com/mockery/mockery/blob/HEAD/COPYRIGHT.md
 * @license https://github.com/mockery/mockery/blob/HEAD/LICENSE BSD 3-Clause License
 * @link https://github.com/mockery/mockery for the canonical source repository
 */

namespace Mockery;

class ExpectsHigherOrderMessage extends HigherOrderMessage
{
    public function __construct(MockInterface $mock)
    {
        parent::__construct($mock, 'shouldReceive');
    }

    /**
     * @param string $method
     * @param array  $args
     *
     * @return Expectation|ExpectationInterface|HigherOrderMessage
     */
    public function __call($method, $args)
    {
        $expectation = parent::__call($method, $args);

        return $expectation->once();
    }
}
=======
<?php

/**
 * Mockery (https://docs.mockery.io/)
 *
 * @copyright https://github.com/mockery/mockery/blob/HEAD/COPYRIGHT.md
 * @license https://github.com/mockery/mockery/blob/HEAD/LICENSE BSD 3-Clause License
 * @link https://github.com/mockery/mockery for the canonical source repository
 */

namespace Mockery;

class ExpectsHigherOrderMessage extends HigherOrderMessage
{
    public function __construct(MockInterface $mock)
    {
        parent::__construct($mock, 'shouldReceive');
    }

    /**
     * @param string $method
     * @param array  $args
     *
     * @return Expectation|ExpectationInterface|HigherOrderMessage
     */
    public function __call($method, $args)
    {
        $expectation = parent::__call($method, $args);

        return $expectation->once();
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
