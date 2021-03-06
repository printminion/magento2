<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Indexer\Model\ResourceModel\Mview\View\State;

class Collection extends \Magento\Framework\Model\ModelResource\Db\Collection\AbstractCollection implements
    \Magento\Framework\Mview\View\State\CollectionInterface
{
    /**
     * Collection initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Magento\Indexer\Model\Mview\View\State', 'Magento\Indexer\Model\ResourceModel\Mview\View\State');
    }
}
