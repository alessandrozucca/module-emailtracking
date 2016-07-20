<?php
/**
 * Email Tracking Module (https://www.alessandrozucca.co.uk/)
 *
 *  Copyright (c) 2016 Alessandro Zucca (https://www.alessandrozucca.co.uk/)
 *  See LICENSE.txt for license details.
 *
 *  Author: Alessandro Zucca <alessandro.zucca@gmail.com>
 */

namespace Aiki86\EmailTracking\Model\ResourceModel;

class EmailTracking extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function _construct()
    {
        $this->_init('email_tracking', 'email_tracking_id');
    }
}