<<<<<<< HEAD
<?php

namespace Namshi\JOSE\Base64;

class Base64Encoder implements Encoder
{
    /**
     * @param string $data
     *
     * @return string
     */
    public function encode($data)
    {
        return base64_encode($data);
    }

    /**
     * @param string $data
     *
     * @return string
     */
    public function decode($data)
    {
        return base64_decode($data);
    }
}
=======
<?php

namespace Namshi\JOSE\Base64;

class Base64Encoder implements Encoder
{
    /**
     * @param string $data
     *
     * @return string
     */
    public function encode($data)
    {
        return base64_encode($data);
    }

    /**
     * @param string $data
     *
     * @return string
     */
    public function decode($data)
    {
        return base64_decode($data);
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
