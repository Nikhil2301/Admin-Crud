<?php

namespace Project\Test\Model\ResourceModel\Skitdash;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init('Project\Test\Model\Skitdash', 'Project\Test\Model\ResourceModel\Skitdash');
    }
}
