<<<<<<< HEAD
<?php
namespace Hamcrest\Core;

class IsNullTest extends \Hamcrest\AbstractMatcherTest
{

    protected function createMatcher()
    {
        return \Hamcrest\Core\IsNull::nullValue();
    }

    public function testEvaluatesToTrueIfArgumentIsNull()
    {
        assertThat(null, nullValue());
        assertThat(self::ANY_NON_NULL_ARGUMENT, not(nullValue()));

        assertThat(self::ANY_NON_NULL_ARGUMENT, notNullValue());
        assertThat(null, not(notNullValue()));
    }
}
=======
<?php
namespace Hamcrest\Core;

class IsNullTest extends \Hamcrest\AbstractMatcherTest
{

    protected function createMatcher()
    {
        return \Hamcrest\Core\IsNull::nullValue();
    }

    public function testEvaluatesToTrueIfArgumentIsNull()
    {
        assertThat(null, nullValue());
        assertThat(self::ANY_NON_NULL_ARGUMENT, not(nullValue()));

        assertThat(self::ANY_NON_NULL_ARGUMENT, notNullValue());
        assertThat(null, not(notNullValue()));
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
