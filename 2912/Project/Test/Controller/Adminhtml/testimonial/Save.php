<?php

namespace Project\Test\Controller\Adminhtml\testimonial;

class Save  extends \Magento\Backend\App\Action
{
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Backend\Model\Auth\Session $authSession,
        \Project\Test\Model\Testimonial $Testimonial
    ) {
        $this->authSession = $authSession;
        $this->Testimonial = $Testimonial;
        parent::__construct($context);
    }

    public function execute()
    {
        
        $resultRedirect = $this->resultRedirectFactory->create();
        $data = $this->getRequest()->getPost();
        try {
           
            $model = $this->Testimonial;
            if (isset($data['id']) && !empty($data['id'])) {
                $model->load($data['id']);
            }
            $model->setData('name', $data['name']);
            $model->setData('phone', $data['phone']);
            $model->setData('content', $data['content']);
            $model->setData('age', $data['age']);
            
            $model->save();
            $this->messageManager->addSuccess(__('Row data has been successfully saved.'));
        } catch (\Exception $e) {
            $this->messageManager->addError(__($e->getMessage()));
        }
        return $resultRedirect->setPath('*/*/index');
    }
}
