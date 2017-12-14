<?php

namespace PhpHelpers;

/**
 * Class HttpHelpersTrait
 *
 * @category HTTP_Tools
 * @package  PhpHelpers
 * @author   Ondřej Samohel <annatar@annatar.net>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @author   Ondřej Samohel <annatar@annatar.net>
 * @link     https://github.com/antirotor/PhpHelpers.git
 */
trait HttpHelpersTrait
{
    /**
     * Get browser specified language, given site supported languages
     *
     * @param array  $available Available language we are supporting
     * @param string $default   Default language we want
     *
     * @return bool|string      Language code
     *
     * @todo consider weights
     */
    public static function getBrowserLanguage($available = [], $default = 'en')
    {
        if (isset($_SERVER[ 'HTTP_ACCEPT_LANGUAGE' ])) {
            $langs = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
            if (empty($available)) {
                return $langs[ 0 ];
            }
            foreach ($langs as $lang) {
                $lang = substr($lang, 0, 2);
                if (in_array($lang, $available)) {
                    return $lang;
                }
            }
        }
        return $default;
    }
}
