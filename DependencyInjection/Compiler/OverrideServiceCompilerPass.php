<?php
/**
 * Created by PhpStorm.
 * User: hong1234
 * Date: 03.11.16
 * Time: 12:05
 */

namespace Foggyline\CustomerBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class OverrideServiceCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        // Override the core module 'onsale' service
        $container->removeDefinition('customer_menu');
        $container->setDefinition('customer_menu', $container->getDefinition('foggyline_customer.customer_menu'));
    }
}