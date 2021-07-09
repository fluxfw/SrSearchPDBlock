<?php

namespace srag\Plugins\SrSearchPDBlock\Search\Block;

use ilBlockGUI;
use ilSrSearchPDBlockPlugin;
use srag\DIC\SrSearchPDBlock\DICTrait;
use srag\Plugins\SrSearchPDBlock\Search\BaseSearch;
use srag\Plugins\SrSearchPDBlock\Utils\SrSearchPDBlockTrait;

/**
 * Class SearchBlock
 *
 * @package srag\Plugins\SrSearchPDBlock\Search\Block
 */
class  SearchBlock extends ilBlockGUI
{

    use DICTrait;
    use SrSearchPDBlockTrait;

    const PLUGIN_CLASS_NAME = ilSrSearchPDBlockPlugin::class;
    /**
     * @var BaseSearch
     */
    protected $search;


    /**
     * BaseSearchBlock constructor
     *
     * @param BaseSearch $search
     */
    public function __construct(BaseSearch $search)
    {
        $this->search = $search;

        parent::__construct();

        $this->initBlock();
    }


    /**
     * @inheritDoc
     */
    public function fillDataSection()/*: void*/
    {
        $this->setDataSection($this->getSearch());
    }


    /**
     * @inheritDoc
     */
    public function getBlockType() : string
    {
        return ilSrSearchPDBlockPlugin::PLUGIN_ID;
    }


    /**
     * @inheritDoc
     */
    protected function getLegacyContent() : string
    {
        return $this->getSearch();
    }


    /**
     * @return string
     */
    protected function getSearch() : string
    {
        return self::output()->getHTML($this->search);
    }


    /**
     *
     */
    protected function initBlock()/*: void*/
    {
        $this->new_rendering = true;
    }


    /**
     * @inheritDoc
     */
    protected function isRepositoryObject() : bool
    {
        return false;
    }
}
