<?php

namespace PhpHelpers;

/**
 * Class HttpHelpersTrait
 *
 * @category Arrays
 * @package  PhpHelpers
 * @author   Ondřej Samohel <annatar@annatar.net>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @author   Ondřej Samohel <annatar@annatar.net>
 * @link     https://github.com/antirotor/PhpHelpers.git
 */
trait ArrayHelpersTrait
{
    /**
     * Test if array contains set of keys
     *
     * @param array $required set of keys array has to have
     * @param array $array tested array
     * @return bool
     */
    public static function arrayKeysExist(array $required, array $array) : Bool
    {
        foreach ($required as $key) {
            if (!array_key_exists($key, $array)) {
                return false;
            }
        }
        return true;
    }
}