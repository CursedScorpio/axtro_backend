<<<<<<< HEAD
<?php

namespace Namshi\JOSE\Signer\OpenSSL;

/**
 * HMAC Signer using SHA-256.
 */
class HS256 extends HMAC
{
    public function getHashingAlgorithm()
    {
        return 'sha256';
    }
}
=======
<?php

namespace Namshi\JOSE\Signer\OpenSSL;

/**
 * HMAC Signer using SHA-256.
 */
class HS256 extends HMAC
{
    public function getHashingAlgorithm()
    {
        return 'sha256';
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
