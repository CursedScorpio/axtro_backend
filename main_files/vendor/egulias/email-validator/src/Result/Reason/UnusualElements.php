<<<<<<< HEAD
<?php

namespace Egulias\EmailValidator\Result\Reason;

class UnusualElements implements Reason
{
    /**
     * @var string $element
     */
    private $element;

    public function __construct(string $element)
    {
        $this->element = $element;
    }

    public function code() : int
    {
        return 201;
    }

    public function description() : string
    {
        return 'Unusual element found, wourld render invalid in majority of cases. Element found: ' . $this->element;
    }
}
=======
<?php

namespace Egulias\EmailValidator\Result\Reason;

class UnusualElements implements Reason
{
    /**
     * @var string $element
     */
    private $element;

    public function __construct(string $element)
    {
        $this->element = $element;
    }

    public function code() : int
    {
        return 201;
    }

    public function description() : string
    {
        return 'Unusual element found, wourld render invalid in majority of cases. Element found: ' . $this->element;
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
