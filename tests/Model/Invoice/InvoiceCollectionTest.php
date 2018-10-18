<?php

namespace FAPI\Fortnox\Tests\Model\Invoice;

use FAPI\Fortnox\Model\Invoice\InvoiceCollection;
use FAPI\Fortnox\Tests\Model\BaseModelTest;

class InvoiceCollectionTest extends BaseModelTest
{
    public function testCreate()
    {
        $json =
<<<'JSON'
{
    "Invoices": [
        {
            "@url": "https://api.fortnox.se/3/invoices/1",
            "Balance": 1250,
            "Booked": false,
            "Cancelled": false,
            "Currency": "SEK",
            "CurrencyRate": "1",
            "CurrencyUnit": 1,
            "CustomerName": "Kund 100048",
            "CustomerNumber": "100048",
            "DocumentNumber": "1",
            "DueDate": "2014-12-12",
            "ExternalInvoiceReference1": "",
            "ExternalInvoiceReference2": "",
            "InvoiceDate": "2014-11-11",
            "OCR": "133",
            "Project": 0,
            "Sent": false,
            "TermsOfPayment": "60",
            "Total": 1250,
            "WayOfDelivery": ""
        },
        {
            "@url": "https://api.fortnox.se/3/invoices/3",
            "Balance": 0,
            "Booked": false,
            "Cancelled": true,
            "Currency": "SEK",
            "CurrencyRate": "1",
            "CurrencyUnit": 1,
            "CustomerName": "Kund 100048",
            "CustomerNumber": "100048",
            "DocumentNumber": "3",
            "DueDate": "2015-01-01",
            "ExternalInvoiceReference1": "",
            "ExternalInvoiceReference2": "",
            "InvoiceDate": "2014-12-02",
            "OCR": "332",
            "Project": 0,
            "Sent": false,
            "TermsOfPayment": "30",
            "Total": 5500,
            "WayOfDelivery": ""
        }
    ],
    "MetaInformation": {
        "@CurrentPage": 1,
        "@TotalPages": 3,
        "@TotalResources": 203
    }
}
JSON;
        $model = InvoiceCollection::createFromArray(json_decode($json, true));
        $this->assertCount(2, $model->getInvoices());
        $this->assertFalse(empty($model->getMeta()));
    }
}
