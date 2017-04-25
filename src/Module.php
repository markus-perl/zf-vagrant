<?php

namespace Vagrant;

use Vagrant\Model\Vagrant;
use Zend\Mvc\MvcEvent;

class Module
{


    public function onBootstrap(MvcEvent $e)
    {
        Vagrant::clearCache();

        if ('' == ini_get('date.timezone')) {
            date_default_timezone_set('Europe/Berlin');
        }
        mb_internal_encoding('UTF-8');

        if (!headers_sent()) {
            header_remove('X-Powered-By');
        }

    }

}
