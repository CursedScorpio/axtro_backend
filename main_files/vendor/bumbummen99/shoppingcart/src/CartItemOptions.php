<<<<<<< HEAD
<?php

namespace Gloudemans\Shoppingcart;

use Illuminate\Support\Collection;

class CartItemOptions extends Collection
{
    /**
     * Get the option by the given key.
     *
     * @param string $key
     *
     * @return mixed
     */
    public function __get($key)
    {
        return $this->get($key);
    }
}
=======
<?php

namespace Gloudemans\Shoppingcart;

use Illuminate\Support\Collection;

class CartItemOptions extends Collection
{
    /**
     * Get the option by the given key.
     *
     * @param string $key
     *
     * @return mixed
     */
    public function __get($key)
    {
        return $this->get($key);
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
