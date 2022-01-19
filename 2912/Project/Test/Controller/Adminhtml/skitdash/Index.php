<?php

namespace Project\Test\Controller\Adminhtml\skitdash;

class Index extends \Magento\Backend\App\Action
{

	/**
	 * Constructor
	 *
	 * @param \Magento\Backend\App\Action\Context $context
	 * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
	 */
	public function __construct(
		\Magento\Backend\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $resultPageFactory
	) {
		parent::__construct($context);
		$this->resultPageFactory = $resultPageFactory;
	}

	/**
	 *
	 * @return \Magento\Framework\View\Result\Page
	 */
	public function execute()
	{
		$resultPage = $this->resultPageFactory->create();

		$resultPage->getConfig()->getTitle()->prepend((__('Listings of Data')));

		return $resultPage;
	}

}
