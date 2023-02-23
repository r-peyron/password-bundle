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

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 *
 * @author Rémy P. <r.peyron@ingeno.eu>
 * @package Ingeneo\Bundle\ResetPasswordBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /**
     * @inheritDoc
     */
    public function getConfigTreeBuilder (): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('ingeneo_reset_password');

        /** @var ArrayNodeDefinition $rootNode */
        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
            ->scalarNode('name')->defaultValue('world')->info('Planet name')->end()
            ->end();

        return $treeBuilder;
    }

}
