<?php

namespace srag\DIC\SrSearchPDBlock\Plugin;

/**
 * Interface Pluginable
 *
 * @package srag\DIC\SrSearchPDBlock\Plugin
 */
interface Pluginable
{

    /**
     * @return PluginInterface
     */
    public function getPlugin() : PluginInterface;


    /**
     * @param PluginInterface $plugin
     *
     * @return static
     */
    public function withPlugin(PluginInterface $plugin)/*: static*/ ;
}
