<<<<<<< HEAD
<?php

namespace Namshi\JOSE\Signer\OpenSSL;

/**
 * HMAC Signer using SHA-384.
 */
class HS384 extends HMAC
{
    public function getHashingAlgorithm()
    {
        return 'sha384';
    }
}
=======
<?php

namespace Namshi\JOSE\Signer\OpenSSL;

/**
 * HMAC Signer using SHA-384.
 */
class HS384 extends HMAC
{
    public function getHashingAlgorithm()
    {
        return 'sha384';
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
