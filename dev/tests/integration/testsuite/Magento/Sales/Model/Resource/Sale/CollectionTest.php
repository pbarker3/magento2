<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Sales\Model\Resource\Sale;

use Magento\TestFramework\Helper\Bootstrap;

class CollectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @magentoDataFixture Magento/Sales/_files/order_with_customer.php
     */
    public function testSetCustomerFilter()
    {
        $collectionModel = Bootstrap::getObjectManager()->create('Magento\Sales\Model\Resource\Sale\Collection');
        $this->assertEquals(1, $collectionModel->setCustomerIdFilter(1)->count());
        $collectionModel = Bootstrap::getObjectManager()->create('Magento\Sales\Model\Resource\Sale\Collection');
        $this->assertEquals(0, $collectionModel->setCustomerIdFilter(2)->count());
    }
}
