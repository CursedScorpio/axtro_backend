<<<<<<< HEAD
<?php

namespace Illuminate\Database\Eloquent\Factories;

use Illuminate\Support\Arr;

class CrossJoinSequence extends Sequence
{
    /**
     * Create a new cross join sequence instance.
     *
     * @param  array  ...$sequences
     * @return void
     */
    public function __construct(...$sequences)
    {
        $crossJoined = array_map(
            function ($a) {
                return array_merge(...$a);
            },
            Arr::crossJoin(...$sequences),
        );

        parent::__construct(...$crossJoined);
    }
}
=======
<?php

namespace Illuminate\Database\Eloquent\Factories;

use Illuminate\Support\Arr;

class CrossJoinSequence extends Sequence
{
    /**
     * Create a new cross join sequence instance.
     *
     * @param  array  ...$sequences
     * @return void
     */
    public function __construct(...$sequences)
    {
        $crossJoined = array_map(
            function ($a) {
                return array_merge(...$a);
            },
            Arr::crossJoin(...$sequences),
        );

        parent::__construct(...$crossJoined);
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
