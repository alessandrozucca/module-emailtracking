<?php
/**
 * Email Tracking Module (https://www.alessandrozucca.co.uk/)
 *
 * Copyright (c) 2016 Alessandro Zucca (https://www.alessandrozucca.co.uk/)
 * See LICENSE.txt for license details.
 *
 * Author: Alessandro Zucca <alessandro.zucca@gmail.com>
 */

namespace Aiki86\EmailTracking\Block\Adminhtml;

class EmailTracking extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_blockGroup = 'Aiki86_EmailTracking';
        $this->_controller = 'adminhtml_emailtracking';
        parent::_construct();
    }

    protected function _addNewButton()
    {
    }
}
