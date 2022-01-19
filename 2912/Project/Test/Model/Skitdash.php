<?php

namespace Project\Test\Model;

class Skitdash extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize customer model
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('Project\Test\Model\ResourceModel\Skitdash');
    }
}
