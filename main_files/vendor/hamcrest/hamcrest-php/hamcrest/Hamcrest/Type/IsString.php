<<<<<<< HEAD
<?php
namespace Hamcrest\Type;

/*
 Copyright (c) 2010 hamcrest.org
 */
use Hamcrest\Core\IsTypeOf;

/**
 * Tests whether the value is a string.
 */
class IsString extends IsTypeOf
{

    /**
     * Creates a new instance of IsString
     */
    public function __construct()
    {
        parent::__construct('string');
    }

    /**
     * Is the value a string?
     *
     * @factory
     */
    public static function stringValue()
    {
        return new self;
    }
}
=======
<?php
namespace Hamcrest\Type;

/*
 Copyright (c) 2010 hamcrest.org
 */
use Hamcrest\Core\IsTypeOf;

/**
 * Tests whether the value is a string.
 */
class IsString extends IsTypeOf
{

    /**
     * Creates a new instance of IsString
     */
    public function __construct()
    {
        parent::__construct('string');
    }

    /**
     * Is the value a string?
     *
     * @factory
     */
    public static function stringValue()
    {
        return new self;
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
