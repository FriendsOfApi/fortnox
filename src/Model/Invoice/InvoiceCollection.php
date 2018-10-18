<?php

declare(strict_types=1);

namespace FAPI\Fortnox\Model\Invoice;

use FAPI\Fortnox\Model\CreatableFromArray;

class InvoiceCollection implements CreatableFromArray
{
    /**
     * @var Invoice[]
     */
    private $invoices = [];

    /**
     * @var array
     */
    private $meta = [];

    private function __construct()
    {
    }

    public static function createFromArray(array $data)
    {
        $collection = new self();
        $collection->meta = $data['MetaInformation'];

        foreach ($data['Invoices'] as $childData) {
            $collection->invoices[] = Invoice::createFromArray($childData);
        }

        return $collection;
    }

    /**
     * @return Invoice[]
     */
    public function getInvoices(): array
    {
        return $this->invoices;
    }

    public function getMeta(): array
    {
        return $this->meta;
    }
}
