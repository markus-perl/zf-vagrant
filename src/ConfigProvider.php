<?php

namespace Vagrant;

use Vagrant\Model\Vagrant;

/**
 * The configuration provider for the App module
 *
 * @see https://docs.zendframework.com/zend-component-installer/
 */
class ConfigProvider
{

    public function __invoke()
    {
        Vagrant::bootstrap();

        return [];
    }

}
