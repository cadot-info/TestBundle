<?php

namespace Tuto\TestBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class TestExtension extends Extension implements PrependExtensionInterface
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yaml');
        //charge config/packages/test.yaml par lib/tuto/tools-bundle/DependencyInjection/Configuration.php
        // $config = $this->processConfiguration(new Configuration(), $configs);
        // $container->setParameter('test.my_var_string', $config['my_var_string']);
        // $container->setParameter('test.my_array', $config['my_array']);
        // $container->setParameter('test.my_integer', $config['my_integer']);
        // $container->setParameter('test.my_var_string_option', $config['my_var_string_option']);
    }

    public function prepend(ContainerBuilder $container)
    {
    }

    public function getAlias()
    {
        return parent::getAlias();
    }
}
