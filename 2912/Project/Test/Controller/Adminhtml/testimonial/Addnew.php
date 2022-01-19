<?php

namespace Project\Test\Controller\Adminhtml\testimonial;

use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;

class Addnew extends \Magento\Backend\App\Action
{

    /**
     * @param \Magento\Backend\App\Action\Context $context
     */
    public function __construct(
        Context $context,
        \Project\Test\Model\TestimonialFactory $testimonialFactory
    ) {
        parent::__construct($context);
        $this->testimonialFactory = $testimonialFactory;
    }


    /**
     * Create new Entity
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {

        $this->testimonialFactory->create();


        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        $title = "Add New Data";

        $resultPage->getConfig()->getTitle()->prepend($title);

        return $resultPage;
    }
}
