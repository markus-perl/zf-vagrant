<?php

namespace Vagrant;

use Vagrant\Model\Vagrant;
use Zend\Mvc\MvcEvent;

class Module
{


    public function onBootstrap(MvcEvent $e)
    {
        Vagrant::bootstrap();

    }

}
