<?php

namespace Project\Test\Model\ResourceModel;

class Testimonial extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('testimonial', 'id');
    }
}
