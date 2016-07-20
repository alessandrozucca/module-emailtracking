<?php
/**
 * Email Tracking Module (https://www.alessandrozucca.co.uk/)
 *
 *  Copyright (c) 2016 Alessandro Zucca (https://www.alessandrozucca.co.uk/)
 *  See LICENSE.txt for license details.
 *
 *  Author: Alessandro Zucca <alessandro.zucca@gmail.com>
 */

namespace Aiki86\EmailTracking\Model;

class EmailTracking extends \Magento\Framework\Model\AbstractModel
{
    public function _construct()
    {
        $this->_init('Aiki86\EmailTracking\Model\ResourceModel\EmailTracking');
    }
}