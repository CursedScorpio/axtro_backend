<<<<<<< HEAD
<?php

namespace Namshi\JOSE\Signer\SecLib;

class RS256 extends RSA
{
    public function __construct()
    {
        parent::__construct();
        $this->encryptionAlgorithm->setHash('sha256');
        $this->encryptionAlgorithm->setMGFHash('sha256');
    }
}
=======
<?php

namespace Namshi\JOSE\Signer\SecLib;

class RS256 extends RSA
{
    public function __construct()
    {
        parent::__construct();
        $this->encryptionAlgorithm->setHash('sha256');
        $this->encryptionAlgorithm->setMGFHash('sha256');
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
