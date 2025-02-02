<<<<<<< HEAD
<?php
namespace Hamcrest;

/*
 Copyright (c) 2009 hamcrest.org
 */

/**
 * Official documentation for this class is missing.
 */
abstract class DiagnosingMatcher extends BaseMatcher
{

    final public function matches($item)
    {
        return $this->matchesWithDiagnosticDescription($item, new NullDescription());
    }

    public function describeMismatch($item, Description $mismatchDescription)
    {
        $this->matchesWithDiagnosticDescription($item, $mismatchDescription);
    }

    abstract protected function matchesWithDiagnosticDescription($item, Description $mismatchDescription);
}
=======
<?php
namespace Hamcrest;

/*
 Copyright (c) 2009 hamcrest.org
 */

/**
 * Official documentation for this class is missing.
 */
abstract class DiagnosingMatcher extends BaseMatcher
{

    final public function matches($item)
    {
        return $this->matchesWithDiagnosticDescription($item, new NullDescription());
    }

    public function describeMismatch($item, Description $mismatchDescription)
    {
        $this->matchesWithDiagnosticDescription($item, $mismatchDescription);
    }

    abstract protected function matchesWithDiagnosticDescription($item, Description $mismatchDescription);
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
