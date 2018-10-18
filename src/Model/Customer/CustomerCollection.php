<?php

declare(strict_types=1);

namespace FAPI\Fortnox\Model\Customer;

use FAPI\Fortnox\Model\CreatableFromArray;

class CustomerCollection implements CreatableFromArray
{
    /**
     * @var Customer[]
     */
    private $customers = [];
    private $meta = [];

    private function __construct()
    {
    }

    public static function createFromArray(array $data)
    {
        $collection = new self();
        $collection->meta = $data['MetaInformation'];

        foreach ($data['Customers'] as $customerData) {
            $collection->customers[] = Customer::createFromArray($customerData);
        }

        return $collection;
    }

    /**
     * @return Customer[]
     */
    public function getCustomers(): array
    {
        return $this->customers;
    }

    /**
     * @return array
     */
    public function getMeta(): array
    {
        return $this->meta;
    }
}
