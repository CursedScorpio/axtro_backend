<<<<<<< HEAD
<?php
namespace Hamcrest\Internal;

/*
 Copyright (c) 2009 hamcrest.org
 */
use Hamcrest\Description;
use Hamcrest\SelfDescribing;

/**
 * A wrapper around any value so that it describes itself.
 */
class SelfDescribingValue implements SelfDescribing
{

    private $_value;

    public function __construct($value)
    {
        $this->_value = $value;
    }

    public function describeTo(Description $description)
    {
        $description->appendValue($this->_value);
    }
}
=======
<?php
namespace Hamcrest\Internal;

/*
 Copyright (c) 2009 hamcrest.org
 */
use Hamcrest\Description;
use Hamcrest\SelfDescribing;

/**
 * A wrapper around any value so that it describes itself.
 */
class SelfDescribingValue implements SelfDescribing
{

    private $_value;

    public function __construct($value)
    {
        $this->_value = $value;
    }

    public function describeTo(Description $description)
    {
        $description->appendValue($this->_value);
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
