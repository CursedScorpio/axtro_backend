<<<<<<< HEAD
<?php

namespace Namshi\JOSE\Signer\OpenSSL;

use Namshi\JOSE\Signer\SignerInterface;

/**
 * None Signer.
 */
class None implements SignerInterface
{
    /**
     * {@inheritdoc}
     */
    public function sign($input, $key)
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function verify($key, $signature, $input)
    {
        return $signature === '';
    }
}
=======
<?php

namespace Namshi\JOSE\Signer\OpenSSL;

use Namshi\JOSE\Signer\SignerInterface;

/**
 * None Signer.
 */
class None implements SignerInterface
{
    /**
     * {@inheritdoc}
     */
    public function sign($input, $key)
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function verify($key, $signature, $input)
    {
        return $signature === '';
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
