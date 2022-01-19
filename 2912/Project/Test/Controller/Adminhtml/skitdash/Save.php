<?php

namespace Project\Test\Controller\Adminhtml\skitdash;

class Save  extends \Magento\Backend\App\Action
{
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Backend\Model\Auth\Session $authSession,
        \Project\Test\Model\Skitdash $Skitdash
    ) {
        $this->authSession = $authSession;
        $this->Skitdash = $Skitdash;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $data = $this->getRequest()->getPost();
        try {
            $model = $this->Skitdash;
            if (isset($data['id']) && !empty($data['id'])) {
                $model->load($data['id']);
            }
            $model->setData('title', $data['title']);
            $model->setData('content', $data['content']);
            $model->setData('description', $data['description']);
            $model->save();
            $this->messageManager->addSuccess(__('Row data has been successfully saved.'));
        } catch (\Exception $e) {
            $this->messageManager->addError(__($e->getMessage()));
        }
        return $resultRedirect->setPath('*/*/index');
    }
}
