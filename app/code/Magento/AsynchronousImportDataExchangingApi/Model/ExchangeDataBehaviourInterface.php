<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\AsynchronousImportDataExchangingApi\Model;

use Magento\AsynchronousImportDataExchangingApi\Api\Data\ImportInterface;

/**
 * Extension point of Exchange for Data behaviour interfaces
 *
 * @api
 */
interface ExchangeDataBehaviourInterface
{
    /**
     * Exchange for Data behaviour execution
     *
     * @param ImportInterface $import
     * @param array $importData
     *
     * @return void
     */
    public function execute(ImportInterface $import, array $importData): void;
}
