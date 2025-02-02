<<<<<<< HEAD
<?php

namespace League\OAuth1\Client\Credentials;

class ClientCredentials extends Credentials implements ClientCredentialsInterface
{
    /**
     * The credentials callback URI.
     *
     * @var string
     */
    protected $callbackUri;

    /**
     * @inheritDoc
     */
    public function getCallbackUri()
    {
        return $this->callbackUri;
    }

    /**
     * @inheritDoc
     */
    public function setCallbackUri($callbackUri)
    {
        $this->callbackUri = $callbackUri;
    }
}
=======
<?php

namespace League\OAuth1\Client\Credentials;

class ClientCredentials extends Credentials implements ClientCredentialsInterface
{
    /**
     * The credentials callback URI.
     *
     * @var string
     */
    protected $callbackUri;

    /**
     * @inheritDoc
     */
    public function getCallbackUri()
    {
        return $this->callbackUri;
    }

    /**
     * @inheritDoc
     */
    public function setCallbackUri($callbackUri)
    {
        $this->callbackUri = $callbackUri;
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
