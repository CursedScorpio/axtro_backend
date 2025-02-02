<<<<<<< HEAD
<?php

namespace League\OAuth1\Client\Signature;

class PlainTextSignature extends Signature implements SignatureInterface
{
    /**
     * @inheritDoc
     */
    public function method()
    {
        return 'PLAINTEXT';
    }

    /**
     * @inheritDoc
     */
    public function sign($uri, array $parameters = [], $method = 'POST')
    {
        return $this->key();
    }
}
=======
<?php

namespace League\OAuth1\Client\Signature;

class PlainTextSignature extends Signature implements SignatureInterface
{
    /**
     * @inheritDoc
     */
    public function method()
    {
        return 'PLAINTEXT';
    }

    /**
     * @inheritDoc
     */
    public function sign($uri, array $parameters = [], $method = 'POST')
    {
        return $this->key();
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
