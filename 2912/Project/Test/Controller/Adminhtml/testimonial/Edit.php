<?php

namespace Project\Test\Controller\Adminhtml\testimonial;

use Magento\Framework\Controller\ResultFactory;

class Edit extends \Magento\Backend\App\Action
{

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\Registry $coreRegistry,
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Project\Test\Model\TestimonialFactory $testimonialFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
        $this->coreRegistry = $coreRegistry;
        $this->testimonialFactory = $testimonialFactory;
    }


    public function execute()
    {
       
        $rowId = (int) $this->getRequest()->getParam('id');
        $rowData = $this->testimonialFactory->create();

        if ($rowId) {
            $rowData = $rowData->load($rowId);
            if (!$rowData->getId()) {
                $this->messageManager->addError(__('row data no longer exist.'));
                $this->_redirect('*/*/index');
                return;
            }
        }
        $this->coreRegistry->register('row_data1', $rowData);
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $title = "Add Data";
        $resultPage->getConfig()->getTitle()->prepend($title);
        return $resultPage;
    }
}
