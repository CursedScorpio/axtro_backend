<<<<<<< HEAD
<?php

namespace Namshi\JOSE\Signer\OpenSSL;

/**
 * Class responsible to sign inputs with the RSA algorithm, after hashing it.
 */
class RS256 extends RSA
{
    public function getHashingAlgorithm()
    {
        return version_compare(phpversion(), '5.4.8', '<') ? 'SHA256' : OPENSSL_ALGO_SHA256;
    }
}
=======
<?php

namespace Namshi\JOSE\Signer\OpenSSL;

/**
 * Class responsible to sign inputs with the RSA algorithm, after hashing it.
 */
class RS256 extends RSA
{
    public function getHashingAlgorithm()
    {
        return version_compare(phpversion(), '5.4.8', '<') ? 'SHA256' : OPENSSL_ALGO_SHA256;
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
