<?php


use PHPUnit\Framework\TestCase;
use Dasundev\BeautifulIdGenerator\{
    UserIdGenerator,
    InvoiceIdGenerator,
    OrderIdGenerator
};

class GeneratorTest extends TestCase
{
    public function testUserIdGenerate()
    {
        $userId = UserIdGenerator::generate("Dasundev");
        $this->assertTrue(substr("Dasundev",0, 1) === $userId[0]);
    }

    public function testOrderIdGenerateId()
    {
        $orderId = OrderIdGenerator::generate();
        $this->assertTrue(strpos($orderId, "ORDER") > -1 ? true: false);
    }

    public function testInvoicceIdGenerateId()
    {
        $invoiceID = InvoiceIdGenerator::generate();
        $this->assertTrue(strpos($invoiceID, "INVOICE") > -1 ? true: false);
    }
}