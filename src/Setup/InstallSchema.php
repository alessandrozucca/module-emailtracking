<?php
/**
 * Email Tracking Module (https://www.alessandrozucca.co.uk/)
 *
 *  Copyright (c) 2016 Alessandro Zucca (https://www.alessandrozucca.co.uk/)
 *  See LICENSE.txt for license details.
 *
 *  Author: Alessandro Zucca <alessandro.zucca@gmail.com>
 */

namespace Aiki86\EmailTracking\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $connection = $setup->getConnection();
        $table = $connection->newTable($setup->getTable("email_tracking"))
            ->addColumn(
                'email_tracking_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Email Tracking Id'
            )
            ->addColumn(
                "content",
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                null,
                [],
                "Content"
            );
        $connection->createTable($table);
        $setup->endSetup();
    }
}