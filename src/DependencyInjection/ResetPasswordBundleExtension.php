<?php

/*
* Disclaimer: This source code is protected by copyright law and by
* international conventions.
*
* Any reproduction or partial or total distribution of the source code, by any
* means whatsoever, is strictly forbidden.
*
* Anyone not complies with these provisions will be guilty of the offense of
* infringement and the penal sanctions provided for by law.
*
* © 2023 All rights reserved.
*/


namespace Ingeneo\Bundle\ResetPasswordBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Class ResetPasswordBundleExtension
 *
 * @author Rémy P. <r.peyron@ingeno.eu>
 * @package Ingeneo\Bundle\ResetPasswordBundle\DependencyInjection
 */
final class ResetPasswordBundleExtension extends Extension
{
    public function getAlias (): string
    {
        return 'ingeneo_reset_password';
    }

    /**
     * @inheritDoc
     */
    public function load (array $configs, ContainerBuilder $container): void
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        try {
            $loader->load('ingeneo_reset_password_service.xml');
        } catch (\Exception $e) {
            throw new LogicException('Unable to load services.yaml', 0, $e);
        }

        $configuration = $this->getConfiguration($configs, $container);
        $config        = $this->processConfiguration($configuration, $configs);

        $definition = $container->getDefinition('ingeneo.reset_password.helper');
        $definition->replaceArgument(0, $config['name']);

    }

}
