<<<<<<< HEAD
<?php

namespace Namshi\JOSE\Signer\OpenSSL;

/**
 * Class responsible to sign inputs with the a RSA algorithm, after hashing it.
 */
abstract class RSA extends PublicKey
{
    /**
     * {@inheritdoc}
     */
    protected function getSupportedPrivateKeyType()
    {
        return defined('OPENSSL_KEYTYPE_RSA') ? OPENSSL_KEYTYPE_RSA : false;
    }
}
=======
<?php

namespace Namshi\JOSE\Signer\OpenSSL;

/**
 * Class responsible to sign inputs with the a RSA algorithm, after hashing it.
 */
abstract class RSA extends PublicKey
{
    /**
     * {@inheritdoc}
     */
    protected function getSupportedPrivateKeyType()
    {
        return defined('OPENSSL_KEYTYPE_RSA') ? OPENSSL_KEYTYPE_RSA : false;
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
