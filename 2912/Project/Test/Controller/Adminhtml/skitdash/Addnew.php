<?php

namespace Project\Test\Controller\Adminhtml\skitdash;

use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;

class Addnew extends \Magento\Backend\App\Action
{

    /**
     * @param \Magento\Backend\App\Action\Context $context
     */
    public function __construct(
        Context $context,
        \Project\Test\Model\SkitdashFactory $skitdashFactory
    ) {
        parent::__construct($context);
        $this->skitdashFactory = $skitdashFactory;
    }


    /**
     * Create new Entity
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {

        $this->skitdashFactory->create();


        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        $title = "Add Data";

        $resultPage->getConfig()->getTitle()->prepend($title);

        return $resultPage;
    }
}
