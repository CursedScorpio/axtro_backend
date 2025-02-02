<<<<<<< HEAD
<?php

namespace Egulias\EmailValidator\Warning;

abstract class Warning
{
    /**
     * @var int CODE
     */
    public const CODE = 0;

    /**
     * @var string
     */
    protected $message = '';

    /**
     * @var int
     */
    protected $rfcNumber = 0;

    /**
     * @return string
     */
    public function message()
    {
        return $this->message;
    }

    /**
     * @return int
     */
    public function code()
    {
        return self::CODE;
    }

    /**
     * @return int
     */
    public function RFCNumber()
    {
        return $this->rfcNumber;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->message() . " rfc: " .  $this->rfcNumber . "internal code: " . static::CODE;
    }
}
=======
<?php

namespace Egulias\EmailValidator\Warning;

abstract class Warning
{
    /**
     * @var int CODE
     */
    public const CODE = 0;

    /**
     * @var string
     */
    protected $message = '';

    /**
     * @var int
     */
    protected $rfcNumber = 0;

    /**
     * @return string
     */
    public function message()
    {
        return $this->message;
    }

    /**
     * @return int
     */
    public function code()
    {
        return self::CODE;
    }

    /**
     * @return int
     */
    public function RFCNumber()
    {
        return $this->rfcNumber;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->message() . " rfc: " .  $this->rfcNumber . "internal code: " . static::CODE;
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
