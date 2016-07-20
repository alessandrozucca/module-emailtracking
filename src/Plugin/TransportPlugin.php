<?php
/**
 * Email Tracking Module (https://www.alessandrozucca.co.uk/)
 *
 *  Copyright (c) 2016 Alessandro Zucca (https://www.alessandrozucca.co.uk/)
 *  See LICENSE.txt for license details.
 *
 *  Author: Alessandro Zucca <alessandro.zucca@gmail.com>
 */

namespace Aiki86\EmailTracking\Plugin;

use Aiki86\EmailTracking\Model\EmailTrackingFactory;

class TransportPlugin
{
    private $emailTrackingFactory;
    
    public function __construct(EmailTrackingFactory $emailTrackingFactory)
    {
        $this->emailTrackingFactory = $emailTrackingFactory;
    }

    public function afterSendMessage(\Magento\Framework\Mail\Transport\Interceptor $message) {
        $emailTracking = $this->emailTrackingFactory->create();
        $emailTracking->setContent($message->body);
        $emailTracking->save();
    }
}