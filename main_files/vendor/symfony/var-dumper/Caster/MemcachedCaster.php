<<<<<<< HEAD
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\VarDumper\Caster;

use Symfony\Component\VarDumper\Cloner\Stub;

/**
 * @author Jan Schädlich <jan.schaedlich@sensiolabs.de>
 *
 * @final
 */
class MemcachedCaster
{
    private static array $optionConstants;
    private static array $defaultOptions;

    /**
     * @return array
     */
    public static function castMemcached(\Memcached $c, array $a, Stub $stub, bool $isNested)
    {
        $a += [
            Caster::PREFIX_VIRTUAL.'servers' => $c->getServerList(),
            Caster::PREFIX_VIRTUAL.'options' => new EnumStub(
                self::getNonDefaultOptions($c)
            ),
        ];

        return $a;
    }

    private static function getNonDefaultOptions(\Memcached $c): array
    {
        self::$defaultOptions ??= self::discoverDefaultOptions();
        self::$optionConstants ??= self::getOptionConstants();

        $nonDefaultOptions = [];
        foreach (self::$optionConstants as $constantKey => $value) {
            if (self::$defaultOptions[$constantKey] !== $option = $c->getOption($value)) {
                $nonDefaultOptions[$constantKey] = $option;
            }
        }

        return $nonDefaultOptions;
    }

    private static function discoverDefaultOptions(): array
    {
        $defaultMemcached = new \Memcached();
        $defaultMemcached->addServer('127.0.0.1', 11211);

        $defaultOptions = [];
        self::$optionConstants ??= self::getOptionConstants();

        foreach (self::$optionConstants as $constantKey => $value) {
            $defaultOptions[$constantKey] = $defaultMemcached->getOption($value);
        }

        return $defaultOptions;
    }

    private static function getOptionConstants(): array
    {
        $reflectedMemcached = new \ReflectionClass(\Memcached::class);

        $optionConstants = [];
        foreach ($reflectedMemcached->getConstants() as $constantKey => $value) {
            if (str_starts_with($constantKey, 'OPT_')) {
                $optionConstants[$constantKey] = $value;
            }
        }

        return $optionConstants;
    }
}
=======
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\VarDumper\Caster;

use Symfony\Component\VarDumper\Cloner\Stub;

/**
 * @author Jan Schädlich <jan.schaedlich@sensiolabs.de>
 *
 * @final
 */
class MemcachedCaster
{
    private static array $optionConstants;
    private static array $defaultOptions;

    /**
     * @return array
     */
    public static function castMemcached(\Memcached $c, array $a, Stub $stub, bool $isNested)
    {
        $a += [
            Caster::PREFIX_VIRTUAL.'servers' => $c->getServerList(),
            Caster::PREFIX_VIRTUAL.'options' => new EnumStub(
                self::getNonDefaultOptions($c)
            ),
        ];

        return $a;
    }

    private static function getNonDefaultOptions(\Memcached $c): array
    {
        self::$defaultOptions ??= self::discoverDefaultOptions();
        self::$optionConstants ??= self::getOptionConstants();

        $nonDefaultOptions = [];
        foreach (self::$optionConstants as $constantKey => $value) {
            if (self::$defaultOptions[$constantKey] !== $option = $c->getOption($value)) {
                $nonDefaultOptions[$constantKey] = $option;
            }
        }

        return $nonDefaultOptions;
    }

    private static function discoverDefaultOptions(): array
    {
        $defaultMemcached = new \Memcached();
        $defaultMemcached->addServer('127.0.0.1', 11211);

        $defaultOptions = [];
        self::$optionConstants ??= self::getOptionConstants();

        foreach (self::$optionConstants as $constantKey => $value) {
            $defaultOptions[$constantKey] = $defaultMemcached->getOption($value);
        }

        return $defaultOptions;
    }

    private static function getOptionConstants(): array
    {
        $reflectedMemcached = new \ReflectionClass(\Memcached::class);

        $optionConstants = [];
        foreach ($reflectedMemcached->getConstants() as $constantKey => $value) {
            if (str_starts_with($constantKey, 'OPT_')) {
                $optionConstants[$constantKey] = $value;
            }
        }

        return $optionConstants;
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
