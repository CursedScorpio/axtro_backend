<<<<<<< HEAD
<?php

namespace Namshi\JOSE\Signer\SecLib;

class RS384 extends RSA
{
    public function __construct()
    {
        parent::__construct();
        $this->encryptionAlgorithm->setHash('sha384');
        $this->encryptionAlgorithm->setMGFHash('sha384');
    }
}
=======
<?php

namespace Namshi\JOSE\Signer\SecLib;

class RS384 extends RSA
{
    public function __construct()
    {
        parent::__construct();
        $this->encryptionAlgorithm->setHash('sha384');
        $this->encryptionAlgorithm->setMGFHash('sha384');
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
