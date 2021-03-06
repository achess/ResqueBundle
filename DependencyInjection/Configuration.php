<?php

namespace ShonM\ResqueBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('shon_m_resque');

        $rootNode
            ->children()
                ->scalarNode('host')->defaultValue('localhost')->end()
                ->scalarNode('port')->defaultValue('6379')->end()
                ->scalarNode('password')->defaultValue('')->end()
                ->scalarNode('track')->defaultValue(true)->end()
                ->arrayNode('strategies')
                    ->children()
                        ->arrayNode('fastcgi')
                            ->children()
                                ->scalarNode('worker')
                ->end()
            ->end();

        return $treeBuilder;
    }
}
