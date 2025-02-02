<<<<<<< HEAD
<?php

namespace MercadoPago\Annotation;
use Doctrine\Common\Annotations\Annotation;

/**
 * @Annotation
 */
class Attribute extends Annotation
{
    /**
     * @var
     */
    public $type;

    /**
     * @var
     */
    public $required = false;
    public $serialize = true ;
    public $readOnly;
    public $primaryKey;
    public $idempotency;
    public $defaultValue;
    public $maxLength;
=======
<?php

namespace MercadoPago\Annotation;
use Doctrine\Common\Annotations\Annotation;

/**
 * @Annotation
 */
class Attribute extends Annotation
{
    /**
     * @var
     */
    public $type;

    /**
     * @var
     */
    public $required = false;
    public $serialize = true ;
    public $readOnly;
    public $primaryKey;
    public $idempotency;
    public $defaultValue;
    public $maxLength;
>>>>>>> 0aeda949 (Updating backend files in main_files)
}