<?php

namespace FAPI\Fortnox\Tests\Model\Invoice;

use FAPI\Fortnox\Model\Invoice\Invoice;
use FAPI\Fortnox\Tests\Model\BaseModelTest;

class InvoiceTest extends BaseModelTest
{
    public function testCreate()
    {
        $json =
<<<'JSON'
{
    "Invoice": {
        "@url": "https://api.fortnox.se/3/invoices/203",
        "@urlTaxReductionList": "https://api.fortnox.se/3/taxreductions?filter=invoices&referencenumber=203",
        "Address1": "",
        "Address2": "",
        "AdministrationFee": 0,
        "AdministrationFeeVAT": 0,
        "Balance": 2106,
        "BasisTaxReduction": 0,
        "Booked": false,
        "Cancelled": false,
        "City": "",
        "Comments": "",
        "ContractReference": 0,
        "ContributionPercent": 37.740000000000002,
        "ContributionValue": 600,
        "CostCenter": "",
        "Country": "",
        "Credit": "false",
        "CreditInvoiceReference": "0",
        "Currency": "SEK",
        "CurrencyRate": 1,
        "CurrencyUnit": 1,
        "CustomerName": "Kund 100092",
        "CustomerNumber": "100092",
        "DeliveryAddress1": "",
        "DeliveryAddress2": "",
        "DeliveryCity": "",
        "DeliveryCountry": "",
        "DeliveryDate": null,
        "DeliveryName": "",
        "DeliveryZipCode": "",
        "DocumentNumber": "203",
        "DueDate": "2015-02-07",
        "EDIInformation": {
            "EDIGlobalLocationNumber": "",
            "EDIGlobalLocationNumberDelivery": "",
            "EDIInvoiceExtra1": "",
            "EDIInvoiceExtra2": "",
            "EDIOurElectronicReference": "",
            "EDIYourElectronicReference": ""
        },
        "EUQuarterlyReport": false,
        "EmailInformation": {
            "EmailAddressBCC": null,
            "EmailAddressCC": null,
            "EmailAddressFrom": null,
            "EmailAddressTo": "",
            "EmailBody": "Faktura nummer {no} bifogas ",
            "EmailSubject": "Detta \u00e4r din faktura"
        },
        "ExternalInvoiceReference1": "",
        "ExternalInvoiceReference2": "",
        "Freight": 95,
        "FreightVAT": 23.75,
        "Gross": 1590,
        "HouseWork": false,
        "InvoiceDate": "2015-01-08",
        "InvoicePeriodEnd": "",
        "InvoicePeriodStart": "",
        "InvoiceReference": "0",
        "InvoiceRows": [
            {
                "AccountNumber": 3011,
                "ArticleNumber": "66892",
                "ContributionPercent": 37.740000000000002,
                "ContributionValue": 600,
                "CostCenter": null,
                "DeliveredQuantity": "10.00",
                "Description": "USB-minne 32GB",
                "Discount": 0,
                "DiscountType": "PERCENT",
                "HouseWork": false,
                "HouseWorkHoursToReport": null,
                "HouseWorkType": null,
                "Price": 159,
                "Project": null,
                "Total": 1590,
                "Unit": "st",
                "VAT": 25
            }
        ],
        "InvoiceType": "INVOICE",
        "Labels": [
            {
                "Id": 5
            },
            {
                "Id": 11
            }
        ],
        "Language": "SV",
        "LastRemindDate": null,
        "Net": 1590,
        "NotCompleted": false,
        "OCR": "20354",
        "OfferReference": "0",
        "OrderReference": "0",
        "OrganisationNumber": "",
        "OurReference": "Jocke",
        "PaymentWay": "",
        "Phone1": "",
        "Phone2": "",
        "PriceList": "A",
        "PrintTemplate": "st",
        "Project": 0,
        "Remarks": "",
        "Reminders": 0,
        "RoundOff": -0.25,
        "Sent": false,
        "TaxReduction": null,
        "TermsOfDelivery": "",
        "TermsOfPayment": "30",
        "Total": 2106,
        "TotalToPay": 2106,
        "TotalVAT": 421.25,
        "VATIncluded": false,
        "VoucherNumber": null,
        "VoucherSeries": null,
        "VoucherYear": null,
        "WayOfDelivery": "",
        "YourOrderNumber": "",
        "YourReference": "",
        "ZipCode": ""
    }
}
JSON;
        $model = Invoice::createFromArray(json_decode($json, true));
        $this->assertEquals(2106, $model->getBalance());
    }
}
