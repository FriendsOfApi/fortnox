<?php

namespace FAPI\Fortnox\Tests\Model\Customer;

use FAPI\Fortnox\Model\Customer\CustomerCollection;
use FAPI\Fortnox\Tests\Model\BaseModelTest;

class CustomerCollectionTest extends BaseModelTest
{
    public function testCreate()
    {
        $json =
<<<'JSON'
{
    "Customers": [
        {
            "@url": "https://api.fortnox.se/3/customers/102",
            "Address1": "Halltorpsgatan",
            "Address2": "",
            "City": "KLIPPAN",
            "CustomerNumber": "102",
            "Email": "a.s@example.com",
            "Name": "Anders Svensson",
            "OrganisationNumber": "",
            "Phone": "0435-9249236",
            "ZipCode": "264 32"
        },
        {
            "@url": "https://api.fortnox.se/3/customers/110",
            "Address1": "Bjurtjärn åsviken",
            "Address2": "",
            "City": "ÄLMHULT",
            "CustomerNumber": "102",
            "Email": "s.v@example.com",
            "Name": "Stina Velander",
            "OrganisationNumber": "",
            "Phone": "0476-1352274",
            "ZipCode": "343 90"
        }
    ],
    "MetaInformation": {
        "@CurrentPage": 1,
        "@TotalPages": 1,
        "@TotalResources": 10
    }
}
JSON;
        $model = CustomerCollection::createFromArray(json_decode($json, true));
        $this->assertCount(2, $model->getCustomers());
        $this->assertFalse(empty($model->getMeta()));
    }
}
