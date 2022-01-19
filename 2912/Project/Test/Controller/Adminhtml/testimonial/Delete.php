<?php
/**
 * Copyright © Emipro Technologies Pvt Ltd. All rights reserved.
 * @license http://shop.emiprotechnologies.com/license-agreement/
 */
namespace Project\Test\Controller\Adminhtml\testimonial;

use Magento\Backend\App\Action;

class Delete extends Action
{
    protected $modelJob;

    /**
     * @param Action\Context $context
     * @param \Emipro\Custom\Model\Job $model
     */
    public function __construct(
        Action\Context $context,
        \Project\Test\Model\Testimonial $model
    ) {
        parent::__construct($context);
        $this->modelJob = $model;
    }


    /**
     * Delete action
    */
    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
       
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($id) {
            try {
                $model = $this->modelJob;
                $model->load($id);
                $model->delete();
                $this->messageManager->addSuccess(__('Record deleted'));
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
                return $resultRedirect->setPath('*/*/edit', ['id' => $id]);
            }
        }
        $this->messageManager->addError(__('Record does not exist'));
        return $resultRedirect->setPath('*/*/');
    }
}
