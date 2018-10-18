<?php

namespace FAPI\Fortnox\Tests\Model\Customer;

use FAPI\Fortnox\Model\Customer\Customer;
use FAPI\Fortnox\Tests\Model\BaseModelTest;

class CustomerTest extends BaseModelTest
{
    public function testCreate()
    {
        $json =
<<<'JSON'
{
    "Customer": {
        "@url": "https://api.fortnox.se/3/customers/102",
        "Address1": "Halltorpsgatan",
        "Address2": null,
        "City": "KLIPPAN",
        "Comments": null,
        "CostCenter": null,
        "Country": "Sverige",
        "CountryCode": "SE",
        "Currency": "SEK",
        "CustomerNumber": "102",
        "DefaultDeliveryTypes": {
            "Invoice": "PRINT",
            "Offer": "PRINT",
            "Order": "PRINT"
        },
        "DefaultTemplates": {
            "CashInvoice": "DEFAULTTEMPLATE",
            "Invoice": "DEFAULTTEMPLATE",
            "Offer": "DEFAULTTEMPLATE",
            "Order": "DEFAULTTEMPLATE"
        },
        "DeliveryAddress1": null,
        "DeliveryAddress2": null,
        "DeliveryCity": null,
        "DeliveryCountry": null,
        "DeliveryCountryCode": null,
        "DeliveryFax": null,
        "DeliveryName": null,
        "DeliveryPhone1": null,
        "DeliveryPhone2": null,
        "DeliveryZipCode": null,
        "Email": "a.s@example.com",
        "EmailInvoice": "a.s@example.com",
        "EmailInvoiceBCC": "",
        "EmailInvoiceCC": "",
        "EmailOffer": "a.s@example.com",
        "EmailOfferBCC": "",
        "EmailOfferCC": "",
        "EmailOrder": "a.s@example.com",
        "EmailOrderBCC": "",
        "EmailOrderCC": "",
        "Fax": null,
        "InvoiceAdministrationFee": null,
        "InvoiceDiscount": null,
        "InvoiceFreight": null,
        "InvoiceRemark": "",
        "Name": "Anders Svensson",
        "OrganisationNumber": "",
        "OurReference": "",
        "Phone1": "0435-9249236",
        "Phone2": null,
        "PriceList": "A",
        "Project": null,
        "SalesAccount": null,
        "ShowPriceVATIncluded": false,
        "TermsOfDelivery": "",
        "TermsOfPayment": "",
        "Type": "PRIVATE",
        "VATNumber": "",
        "VATType": "SEVAT",
        "VisitingAddress": null,
        "VisitingCity": null,
        "VisitingCountry": null,
        "VisitingCountryCode": null,
        "VisitingZipCode": null,
        "WWW": "",
        "WayOfDelivery": "",
        "YourReference": "",
        "ZipCode": "264 32"
    }
}
JSON;
        $model = Customer::createFromArray(json_decode($json, true));
    }
}
