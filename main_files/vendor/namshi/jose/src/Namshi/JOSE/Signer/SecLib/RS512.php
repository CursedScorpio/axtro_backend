<<<<<<< HEAD
<?php

namespace Namshi\JOSE\Signer\SecLib;

class RS512 extends RSA
{
    public function __construct()
    {
        parent::__construct();
        $this->encryptionAlgorithm->setHash('sha512');
        $this->encryptionAlgorithm->setMGFHash('sha512');
    }
}
=======
<?php

namespace Namshi\JOSE\Signer\SecLib;

class RS512 extends RSA
{
    public function __construct()
    {
        parent::__construct();
        $this->encryptionAlgorithm->setHash('sha512');
        $this->encryptionAlgorithm->setMGFHash('sha512');
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
