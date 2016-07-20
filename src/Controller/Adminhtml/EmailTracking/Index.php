<?php
/**
 * Email Tracking Module (https://www.alessandrozucca.co.uk/)
 *
 *  Copyright (c) 2016 Alessandro Zucca (https://www.alessandrozucca.co.uk/)
 *  See LICENSE.txt for license details.
 *
 *  Author: Alessandro Zucca <alessandro.zucca@gmail.com>
 */

namespace Aiki86\EmailTracking\Controller\Adminhtml\EmailTracking;

class Index extends \Magento\Backend\App\Action
{
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_setActiveMenu('Aiki86_EmailTracking::email_list');
        $this->_view->getPage()->getConfig()->getTitle()->prepend(__('Email Tracking'));
        $this->_view->renderLayout();
    }
}
