<<<<<<< HEAD
<?php

namespace Egulias\EmailValidator\Parser;

use Egulias\EmailValidator\Result\Result;
use Egulias\EmailValidator\Result\InvalidEmail;
use Egulias\EmailValidator\Result\Reason\CommentsInIDRight;

class IDLeftPart extends LocalPart
{
    protected function parseComments(): Result
    {
        return new InvalidEmail(new CommentsInIDRight(), $this->lexer->current->value);
    }
}
=======
<?php

namespace Egulias\EmailValidator\Parser;

use Egulias\EmailValidator\Result\Result;
use Egulias\EmailValidator\Result\InvalidEmail;
use Egulias\EmailValidator\Result\Reason\CommentsInIDRight;

class IDLeftPart extends LocalPart
{
    protected function parseComments(): Result
    {
        return new InvalidEmail(new CommentsInIDRight(), $this->lexer->current->value);
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
