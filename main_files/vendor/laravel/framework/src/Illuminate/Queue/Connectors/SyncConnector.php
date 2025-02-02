<<<<<<< HEAD
<?php

namespace Illuminate\Queue\Connectors;

use Illuminate\Queue\SyncQueue;

class SyncConnector implements ConnectorInterface
{
    /**
     * Establish a queue connection.
     *
     * @param  array  $config
     * @return \Illuminate\Contracts\Queue\Queue
     */
    public function connect(array $config)
    {
        return new SyncQueue;
    }
}
=======
<?php

namespace Illuminate\Queue\Connectors;

use Illuminate\Queue\SyncQueue;

class SyncConnector implements ConnectorInterface
{
    /**
     * Establish a queue connection.
     *
     * @param  array  $config
     * @return \Illuminate\Contracts\Queue\Queue
     */
    public function connect(array $config)
    {
        return new SyncQueue;
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
