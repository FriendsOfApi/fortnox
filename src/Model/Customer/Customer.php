<?php

declare(strict_types=1);

namespace FAPI\Fortnox\Model\Customer;

use FAPI\Fortnox\Model\CreatableFromArray;

final class Customer implements CreatableFromArray
{
    /** @var string|null */
    private $url;
    /** @var string|null */
    private $address1;
    /** @var string|null */
    private $address2;
    /** @var string|null */
    private $city;
    /** @var string|null */
    private $comments;
    /** @var string|null */
    private $costCenter;
    /** @var string|null */
    private $country;
    /** @var string|null */
    private $countryCode;
    /** @var string|null */
    private $currency;
    /** @var string|null */
    private $customerNumber;
    /** @var array */
    private $defaultDeliveryTypes;
    /** @var array */
    private $defaultTemplates;
    /** @var string|null */
    private $deliveryAddress1;
    /** @var string|null */
    private $deliveryAddress2;
    /** @var string|null */
    private $deliveryCity;
    /** @var string|null */
    private $deliveryCountry;
    /** @var string|null */
    private $deliveryCountryCode;
    /** @var string|null */
    private $deliveryFax;
    /** @var string|null */
    private $deliveryName;
    /** @var string|null */
    private $deliveryPhone1;
    /** @var string|null */
    private $deliveryPhone2;
    /** @var string|null */
    private $deliveryZipCode;
    /** @var string */
    private $email;
    /** @var string */
    private $emailInvoice;
    /** @var string */
    private $emailInvoiceBCC;
    /** @var string */
    private $emailInvoiceCC;
    /** @var string */
    private $emailOffer;
    /** @var string */
    private $emailOfferBCC;
    /** @var string */
    private $emailOfferCC;
    /** @var string */
    private $emailOrder;
    /** @var string */
    private $emailOrderBCC;
    /** @var string */
    private $emailOrderCC;
    /** @var string|null */
    private $fax;
    /** @var string|null */
    private $invoiceAdministrationFee;
    /** @var string|null */
    private $invoiceDiscount;
    /** @var string|null */
    private $invoiceFreight;
    /** @var string|null */
    private $invoiceRemark;
    /** @var string|null */
    private $name;
    /** @var string */
    private $organisationNumber;
    /** @var string */
    private $ourReference;
    /** @var string|null */
    private $phone1;
    /** @var string|null */
    private $phone2;
    /** @var string|null */
    private $priceList;
    /** @var string|null */
    private $project;
    /** @var string|null */
    private $salesAccount;
    /** @var string|null */
    private $showPriceVATIncluded;
    /** @var string */
    private $termsOfDelivery;
    /** @var string */
    private $termsOfPayment;
    /** @var string|null */
    private $type;
    /** @var string */
    private $vatNumber;
    /** @var string|null */
    private $vatType;
    /** @var string|null */
    private $visitingAddress;
    /** @var string|null */
    private $visitingCity;
    /** @var string|null */
    private $visitingCountry;
    /** @var string|null */
    private $visitingCountryCode;
    /** @var string|null */
    private $visitingZipCode;
    /** @var string */
    private $www;
    /** @var string */
    private $wayOfDelivery;
    /** @var string */
    private $yourReference;
    /** @var string|null */
    private $zipCode;
    

    private function __construct()
    {
    }

    public static function createFromArray(array $data)
    {
        $model = new self();
        $data = isset($data['Customer']) ? $data['Customer']: $data;
        $model->url = $data['@url'] ?? null;
        $model->address1 = $data['Address1'] ?? null;
        $model->address2 = $data['Address2'] ?? null;
        $model->city = $data['City'] ?? null;
        $model->comments = $data['Comments'] ?? null;
        $model->costCenter = $data['CostCenter'] ?? null;
        $model->country = $data['Country'] ?? null;
        $model->countryCode = $data['CountryCode'] ?? null;
        $model->currency = $data['Currency'] ?? null;
        $model->customerNumber = $data['CustomerNumber'] ?? null;
        $model->defaultDeliveryTypes = $data['DefaultDeliveryTypes'] ?? [];
        $model->defaultTemplates = $data['DefaultTemplates'] ?? [];
        $model->deliveryAddress1 = $data['DeliveryAddress1'] ?? null;
        $model->deliveryAddress2 = $data['DeliveryAddress2'] ?? null;
        $model->deliveryCity = $data['DeliveryCity'] ?? null;
        $model->deliveryCountry = $data['DeliveryCountry'] ?? null;
        $model->deliveryCountryCode = $data['DeliveryCountryCode'] ?? null;
        $model->deliveryFax = $data['DeliveryFax'] ?? null;
        $model->deliveryName = $data['DeliveryName'] ?? null;
        $model->deliveryPhone1 = $data['DeliveryPhone1'] ?? null;
        $model->deliveryPhone2 = $data['DeliveryPhone2'] ?? null;
        $model->deliveryZipCode = $data['DeliveryZipCode'] ?? null;
        $model->email = $data['Email'] ?? '';
        $model->emailInvoice = $data['EmailInvoice'] ?? '';
        $model->emailInvoiceBCC = $data['EmailInvoiceBCC'] ?? '';
        $model->emailInvoiceCC = $data['EmailInvoiceCC'] ?? '';
        $model->emailOffer = $data['EmailOffer'] ?? '';
        $model->emailOfferBCC = $data['EmailOfferBCC'] ?? '';
        $model->emailOfferCC = $data['EmailOfferCC'] ?? '';
        $model->emailOrder = $data['EmailOrder'] ?? '';
        $model->emailOrderBCC = $data['EmailOrderBCC'] ?? '';
        $model->emailOrderCC = $data['EmailOrderCC'] ?? '';
        $model->fax = $data['Fax'] ?? null;
        $model->invoiceAdministrationFee = $data['InvoiceAdministrationFee'] ?? null;
        $model->invoiceDiscount = $data['InvoiceDiscount'] ?? null;
        $model->invoiceFreight = $data['InvoiceFreight'] ?? null;
        $model->invoiceRemark = $data['InvoiceRemark'] ?? '';
        $model->name = $data['Name'] ?? '';
        $model->organisationNumber = $data['OrganisationNumber'] ?? '';
        $model->ourReference = $data['OurReference'] ?? '';
        $model->phone1 = $data['Phone1'] ?? null;
        $model->phone2 = $data['Phone2'] ?? null;
        $model->priceList = $data['PriceList'] ?? null;
        $model->project = $data['Project'] ?? null;
        $model->salesAccount = $data['SalesAccount'] ?? null;
        $model->showPriceVATIncluded = $data['ShowPriceVATIncluded'] ?? null;
        $model->termsOfDelivery = $data['TermsOfDelivery'] ?? '';
        $model->termsOfPayment = $data['TermsOfPayment'] ?? '';
        $model->type = $data['Type'] ?? null;
        $model->vatNumber = $data['VATNumber'] ?? '';
        $model->vatType = $data['VATType'] ?? null;
        $model->visitingAddress = $data['VisitingAddress'] ?? null;
        $model->visitingCity = $data['VisitingCity'] ?? null;
        $model->visitingCountry = $data['VisitingCountry'] ?? null;
        $model->visitingCountryCode = $data['VisitingCountryCode'] ?? null;
        $model->visitingZipCode = $data['VisitingZipCode'] ?? null;
        $model->www = $data['WWW'] ?? '';
        $model->wayOfDelivery = $data['WayOfDelivery'] ?? '';
        $model->yourReference = $data['YourReference'] ?? '';
        $model->zipCode = $data['ZipCode'] ?? null;


        return $model;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getAddress1(): string
    {
        return $this->address1;
    }

    public function getAddress2(): string
    {
        return $this->address2;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getComments(): string
    {
        return $this->comments;
    }

    public function getCostCenter(): string
    {
        return $this->costCenter;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getCustomerNumber(): string
    {
        return $this->customerNumber;
    }

    /**
     * @return array
     */
    public function getDefaultDeliveryTypes(): array
    {
        return $this->defaultDeliveryTypes;
    }

    /**
     * @return array
     */
    public function getDefaultTemplates(): array
    {
        return $this->defaultTemplates;
    }

    public function getDeliveryAddress1(): string
    {
        return $this->deliveryAddress1;
    }

    public function getDeliveryAddress2(): string
    {
        return $this->deliveryAddress2;
    }

    public function getDeliveryCity(): string
    {
        return $this->deliveryCity;
    }

    public function getDeliveryCountry(): string
    {
        return $this->deliveryCountry;
    }

    public function getDeliveryCountryCode(): string
    {
        return $this->deliveryCountryCode;
    }

    public function getDeliveryFax(): string
    {
        return $this->deliveryFax;
    }

    public function getDeliveryName(): string
    {
        return $this->deliveryName;
    }

    public function getDeliveryPhone1(): string
    {
        return $this->deliveryPhone1;
    }

    public function getDeliveryPhone2(): string
    {
        return $this->deliveryPhone2;
    }

    public function getDeliveryZipCode(): string
    {
        return $this->deliveryZipCode;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getEmailInvoice(): string
    {
        return $this->emailInvoice;
    }

    public function getEmailInvoiceBCC(): string
    {
        return $this->emailInvoiceBCC;
    }

    public function getEmailInvoiceCC(): string
    {
        return $this->emailInvoiceCC;
    }

    public function getEmailOffer(): string
    {
        return $this->emailOffer;
    }

    public function getEmailOfferBCC(): string
    {
        return $this->emailOfferBCC;
    }

    public function getEmailOfferCC(): string
    {
        return $this->emailOfferCC;
    }

    public function getEmailOrder(): string
    {
        return $this->emailOrder;
    }

    public function getEmailOrderBCC(): string
    {
        return $this->emailOrderBCC;
    }

    public function getEmailOrderCC(): string
    {
        return $this->emailOrderCC;
    }

    public function getFax(): string
    {
        return $this->fax;
    }

    public function getInvoiceAdministrationFee(): string
    {
        return $this->invoiceAdministrationFee;
    }

    public function getInvoiceDiscount(): string
    {
        return $this->invoiceDiscount;
    }

    public function getInvoiceFreight(): string
    {
        return $this->invoiceFreight;
    }

    public function getInvoiceRemark(): string
    {
        return $this->invoiceRemark;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getOrganisationNumber(): string
    {
        return $this->organisationNumber;
    }

    public function getOurReference(): string
    {
        return $this->ourReference;
    }

    public function getPhone1(): string
    {
        return $this->phone1;
    }

    public function getPhone2(): string
    {
        return $this->phone2;
    }

    public function getPriceList(): string
    {
        return $this->priceList;
    }

    public function getProject(): string
    {
        return $this->project;
    }

    public function getSalesAccount(): string
    {
        return $this->salesAccount;
    }

    public function getShowPriceVATIncluded(): string
    {
        return $this->showPriceVATIncluded;
    }

    public function getTermsOfDelivery(): string
    {
        return $this->termsOfDelivery;
    }

    public function getTermsOfPayment(): string
    {
        return $this->termsOfPayment;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getVatNumber(): string
    {
        return $this->vatNumber;
    }

    public function getVatType(): string
    {
        return $this->vatType;
    }

    public function getVisitingAddress(): string
    {
        return $this->visitingAddress;
    }

    public function getVisitingCity(): string
    {
        return $this->visitingCity;
    }

    public function getVisitingCountry(): string
    {
        return $this->visitingCountry;
    }

    public function getVisitingCountryCode(): string
    {
        return $this->visitingCountryCode;
    }

    public function getVisitingZipCode(): string
    {
        return $this->visitingZipCode;
    }

    public function getWww(): string
    {
        return $this->www;
    }

    public function getWayOfDelivery(): string
    {
        return $this->wayOfDelivery;
    }

    public function getYourReference(): string
    {
        return $this->yourReference;
    }

    public function getZipCode(): string
    {
        return $this->zipCode;
    }
}
