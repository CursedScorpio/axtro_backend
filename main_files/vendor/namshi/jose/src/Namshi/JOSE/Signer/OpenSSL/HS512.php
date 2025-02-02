<<<<<<< HEAD
<?php

namespace Namshi\JOSE\Signer\OpenSSL;

/**
 * HMAC Signer using SHA-512.
 */
class HS512 extends HMAC
{
    public function getHashingAlgorithm()
    {
        return 'sha512';
    }
}
=======
<?php

namespace Namshi\JOSE\Signer\OpenSSL;

/**
 * HMAC Signer using SHA-512.
 */
class HS512 extends HMAC
{
    public function getHashingAlgorithm()
    {
        return 'sha512';
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
