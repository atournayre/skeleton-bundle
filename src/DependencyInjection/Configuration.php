<?php
declare(strict_types=1);

namespace Bundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * @inheritDoc
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('__PACKAGE_NAME_UNDERSCORE__');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
