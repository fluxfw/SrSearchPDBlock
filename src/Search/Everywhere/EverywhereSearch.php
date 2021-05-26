<?php

namespace srag\Plugins\SrSearchPDBlock\Search\Everywhere;

use ilSrSearchPDBlockPlugin;
use srag\DIC\SrSearchPDBlock\DICTrait;
use srag\Plugins\SrSearchPDBlock\Search\BaseSearch;
use srag\Plugins\SrSearchPDBlock\Utils\SrSearchPDBlockTrait;

/**
 * Class EverywhereSearch
 *
 * @package srag\Plugins\SrSearchPDBlock\Search\Everywhere
 */
class EverywhereSearch
{

    use DICTrait;
    use SrSearchPDBlockTrait;

    const PLUGIN_CLASS_NAME = ilSrSearchPDBlockPlugin::class;
    /**
     * @var BaseSearch[]
     */
    protected $searches;


    /**
     * EverywhereSearch constructor
     *
     * @param BaseSearch[] $searches
     */
    public function __construct(array $searches)
    {
        $this->searches = $searches;
    }


    /**
     * @return string
     */
    public function render() : string
    {
        if (empty($this->searches)) {
            return "";
        }

        $tpl = self::plugin()->template("SrSearchPDBlockEverywhere.html");

        $tpl->setVariable("SEARCHES", self::output()->getHTML($this->searches));

        return self::output()->getHTML($tpl);
    }
}
