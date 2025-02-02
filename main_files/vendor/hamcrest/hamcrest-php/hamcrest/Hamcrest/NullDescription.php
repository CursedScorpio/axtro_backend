<<<<<<< HEAD
<?php
namespace Hamcrest;

/*
 Copyright (c) 2009 hamcrest.org
 */

/**
 * Null implementation of {@link Hamcrest\Description}.
 */
class NullDescription implements Description
{

    public function appendText($text)
    {
        return $this;
    }

    public function appendDescriptionOf(SelfDescribing $value)
    {
        return $this;
    }

    public function appendValue($value)
    {
        return $this;
    }

    public function appendValueList($start, $separator, $end, $values)
    {
        return $this;
    }

    public function appendList($start, $separator, $end, $values)
    {
        return $this;
    }

    public function __toString()
    {
        return '';
    }
}
=======
<?php
namespace Hamcrest;

/*
 Copyright (c) 2009 hamcrest.org
 */

/**
 * Null implementation of {@link Hamcrest\Description}.
 */
class NullDescription implements Description
{

    public function appendText($text)
    {
        return $this;
    }

    public function appendDescriptionOf(SelfDescribing $value)
    {
        return $this;
    }

    public function appendValue($value)
    {
        return $this;
    }

    public function appendValueList($start, $separator, $end, $values)
    {
        return $this;
    }

    public function appendList($start, $separator, $end, $values)
    {
        return $this;
    }

    public function __toString()
    {
        return '';
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
