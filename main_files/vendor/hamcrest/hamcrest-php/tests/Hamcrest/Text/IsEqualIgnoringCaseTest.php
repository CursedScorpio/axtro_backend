<<<<<<< HEAD
<?php
namespace Hamcrest\Text;

class IsEqualIgnoringCaseTest extends \Hamcrest\AbstractMatcherTest
{

    protected function createMatcher()
    {
        return \Hamcrest\Text\IsEqualIgnoringCase::equalToIgnoringCase('irrelevant');
    }

    public function testIgnoresCaseOfCharsInString()
    {
        assertThat('HELLO', equalToIgnoringCase('heLLo'));
        assertThat('hello', equalToIgnoringCase('heLLo'));
        assertThat('HelLo', equalToIgnoringCase('heLLo'));

        assertThat('bye', not(equalToIgnoringCase('heLLo')));
    }

    public function testFailsIfAdditionalWhitespaceIsPresent()
    {
        assertThat('heLLo ', not(equalToIgnoringCase('heLLo')));
        assertThat(' heLLo', not(equalToIgnoringCase('heLLo')));
        assertThat('hello', not(equalToIgnoringCase(' heLLo')));
    }

    public function testFailsIfMatchingAgainstNull()
    {
        assertThat(null, not(equalToIgnoringCase('heLLo')));
    }

    public function testDescribesItselfAsCaseInsensitive()
    {
        $this->assertDescription(
            'equalToIgnoringCase("heLLo")',
            equalToIgnoringCase('heLLo')
        );
    }
}
=======
<?php
namespace Hamcrest\Text;

class IsEqualIgnoringCaseTest extends \Hamcrest\AbstractMatcherTest
{

    protected function createMatcher()
    {
        return \Hamcrest\Text\IsEqualIgnoringCase::equalToIgnoringCase('irrelevant');
    }

    public function testIgnoresCaseOfCharsInString()
    {
        assertThat('HELLO', equalToIgnoringCase('heLLo'));
        assertThat('hello', equalToIgnoringCase('heLLo'));
        assertThat('HelLo', equalToIgnoringCase('heLLo'));

        assertThat('bye', not(equalToIgnoringCase('heLLo')));
    }

    public function testFailsIfAdditionalWhitespaceIsPresent()
    {
        assertThat('heLLo ', not(equalToIgnoringCase('heLLo')));
        assertThat(' heLLo', not(equalToIgnoringCase('heLLo')));
        assertThat('hello', not(equalToIgnoringCase(' heLLo')));
    }

    public function testFailsIfMatchingAgainstNull()
    {
        assertThat(null, not(equalToIgnoringCase('heLLo')));
    }

    public function testDescribesItselfAsCaseInsensitive()
    {
        $this->assertDescription(
            'equalToIgnoringCase("heLLo")',
            equalToIgnoringCase('heLLo')
        );
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
