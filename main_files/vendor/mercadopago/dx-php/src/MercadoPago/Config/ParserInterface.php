<<<<<<< HEAD
<?php
namespace MercadoPago\Config;

/**
 * Interface ParserInterface
 *
 * @package MercadoPago\Config
 */
interface ParserInterface
{
    /**
     * @param $path
     *
     * @return mixed
     */
    public function parse($path);

    /**
     * @return mixed
     */
    public function getSupportedExtensions();
=======
<?php
namespace MercadoPago\Config;

/**
 * Interface ParserInterface
 *
 * @package MercadoPago\Config
 */
interface ParserInterface
{
    /**
     * @param $path
     *
     * @return mixed
     */
    public function parse($path);

    /**
     * @return mixed
     */
    public function getSupportedExtensions();
>>>>>>> 0aeda949 (Updating backend files in main_files)
}