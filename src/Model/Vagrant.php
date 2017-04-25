<?php

namespace Vagrant\Model;

class Vagrant
{

    /**
     * File Cache leeren
     */
    public static function clearCache()
    {
        if (self::isVagrant()) {
            system('echo 2 | sudo tee /proc/sys/vm/drop_caches >/dev/null');
        }
    }

    /**
     * @return bool Befinden wir uns in einem Vagrant Enironment?
     */
    public static function isVagrant()
    {
        return is_dir('/vagrant');
    }

    /**
     *
     */
    public static function bootstrap()
    {
        if ('' == ini_get('date.timezone')) {
            date_default_timezone_set('Europe/Berlin');
        }
        mb_internal_encoding('UTF-8');

        if (!headers_sent()) {
            header_remove('X-Powered-By');
        }

        self::clearCache();
    }

}