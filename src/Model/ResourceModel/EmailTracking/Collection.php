<?php
/**
 * Email Tracking Module (https://www.alessandrozucca.co.uk/)
 *
 *  Copyright (c) 2016 Alessandro Zucca (https://www.alessandrozucca.co.uk/)
 *  See LICENSE.txt for license details.
 *
 *  Author: Alessandro Zucca <alessandro.zucca@gmail.com>
 */

namespace Aiki86\EmailTracking\Model\ResourceModel\EmailTracking;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Aiki86\EmailTracking\Model\EmailTracking', 'Aiki86\EmailTracking\Model\ResourceModel\EmailTracking');
    }
}