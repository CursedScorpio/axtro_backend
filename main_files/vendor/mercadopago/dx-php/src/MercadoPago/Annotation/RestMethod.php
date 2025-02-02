<<<<<<< HEAD
<?php

namespace MercadoPago\Annotation;
use Doctrine\Common\Annotations\Annotation;

/**
 * @Annotation
 */
class RestMethod extends Annotation
{
    /**
     * @var
     */
    public $resource;

    /**
     * @var
     */
    public $method;
    public $idempotency;
=======
<?php

namespace MercadoPago\Annotation;
use Doctrine\Common\Annotations\Annotation;

/**
 * @Annotation
 */
class RestMethod extends Annotation
{
    /**
     * @var
     */
    public $resource;

    /**
     * @var
     */
    public $method;
    public $idempotency;
>>>>>>> 0aeda949 (Updating backend files in main_files)
}