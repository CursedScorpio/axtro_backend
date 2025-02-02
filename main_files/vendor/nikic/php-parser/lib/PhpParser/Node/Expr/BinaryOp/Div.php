<<<<<<< HEAD
<?php declare(strict_types=1);

namespace PhpParser\Node\Expr\BinaryOp;

use PhpParser\Node\Expr\BinaryOp;

class Div extends BinaryOp {
    public function getOperatorSigil(): string {
        return '/';
    }

    public function getType(): string {
        return 'Expr_BinaryOp_Div';
    }
}
=======
<?php declare(strict_types=1);

namespace PhpParser\Node\Expr\BinaryOp;

use PhpParser\Node\Expr\BinaryOp;

class Div extends BinaryOp {
    public function getOperatorSigil(): string {
        return '/';
    }

    public function getType(): string {
        return 'Expr_BinaryOp_Div';
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
