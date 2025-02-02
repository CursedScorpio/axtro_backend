<<<<<<< HEAD
<?php

namespace Namshi\JOSE\Signer\SecLib;

use phpseclib\Crypt\RSA as CryptRSA;

class RSA extends PublicKey
{
    public function __construct()
    {
        $this->encryptionAlgorithm = new CryptRSA();
    }
}
=======
<?php

namespace Namshi\JOSE\Signer\SecLib;

use phpseclib\Crypt\RSA as CryptRSA;

class RSA extends PublicKey
{
    public function __construct()
    {
        $this->encryptionAlgorithm = new CryptRSA();
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
