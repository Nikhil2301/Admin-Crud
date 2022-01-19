<?php

namespace Project\Test\Model\ResourceModel\Testimonial;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init('Project\Test\Model\Testimonial', 'Project\Test\Model\ResourceModel\Testimonial');
    }
}
