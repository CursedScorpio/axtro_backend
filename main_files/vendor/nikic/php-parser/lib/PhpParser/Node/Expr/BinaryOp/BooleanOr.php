<<<<<<< HEAD
<?php declare(strict_types=1);

namespace PhpParser\Node\Expr\BinaryOp;

use PhpParser\Node\Expr\BinaryOp;

class BooleanOr extends BinaryOp {
    public function getOperatorSigil(): string {
        return '||';
    }

    public function getType(): string {
        return 'Expr_BinaryOp_BooleanOr';
    }
}
=======
<?php declare(strict_types=1);

namespace PhpParser\Node\Expr\BinaryOp;

use PhpParser\Node\Expr\BinaryOp;

class BooleanOr extends BinaryOp {
    public function getOperatorSigil(): string {
        return '||';
    }

    public function getType(): string {
        return 'Expr_BinaryOp_BooleanOr';
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
