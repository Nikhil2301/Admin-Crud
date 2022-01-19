<?php

namespace Project\Test\Model\ResourceModel;

class Skitdash extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('skit_dash', 'id');
    }
}
