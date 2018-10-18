<?php

declare(strict_types=1);

namespace FAPI\Fortnox\Model\Customer;

use FAPI\Fortnox\Model\CreatableFromArray;

class Customer implements CreatableFromArray
{
    /** @var string|null */
    private $url;

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
        $model->City = $data['City'] ?? null;
        $model->Comments = $data['Comments'] ?? null;
        $model->CostCenter = $data['CostCenter'] ?? null;
        $model->Country = $data['Country'] ?? null;
        $model->CountryCode = $data['CountryCode'] ?? null;
        $model->Currency = $data['Currency'] ?? null;
        $model->CustomerNumber = $data['CustomerNumber'] ?? null;
        $model->DefaultDeliveryTypes = $data['DefaultDeliveryTypes'] ?? [];
        $model->DefaultTemplates = $data['DefaultTemplates'] ?? [];
        $model->DeliveryAddress1 = $data['DeliveryAddress1'] ?? null;
        $model->DeliveryAddress2 = $data['DeliveryAddress2'] ?? null;
        $model->DeliveryCity = $data['DeliveryCity'] ?? null;
        $model->DeliveryCountry = $data['DeliveryCountry'] ?? null;
        $model->DeliveryCountryCode = $data['DeliveryCountryCode'] ?? null;
        $model->DeliveryFax = $data['DeliveryFax'] ?? null;
        $model->DeliveryName = $data['DeliveryName'] ?? null;
        $model->DeliveryPhone1 = $data['DeliveryPhone1'] ?? null;
        $model->DeliveryPhone2 = $data['DeliveryPhone2'] ?? null;
        $model->DeliveryZipCode = $data['DeliveryZipCode'] ?? null;
        $model->Email = $data['Email'] ?? '';
        $model->EmailInvoice = $data['EmailInvoice'] ?? '';
        $model->EmailInvoiceBCC = $data['EmailInvoiceBCC'] ?? '';
        $model->EmailInvoiceCC = $data['EmailInvoiceCC'] ?? '';
        $model->EmailOffer = $data['EmailOffer'] ?? '';
        $model->EmailOfferBCC = $data['EmailOfferBCC'] ?? '';
        $model->EmailOfferCC = $data['EmailOfferCC'] ?? '';
        $model->EmailOrder = $data['EmailOrder'] ?? '';
        $model->EmailOrderBCC = $data['EmailOrderBCC'] ?? '';
        $model->EmailOrderCC = $data['EmailOrderCC'] ?? '';
        $model->Fax = $data['Fax'] ?? null;
        $model->InvoiceAdministrationFee = $data['InvoiceAdministrationFee'] ?? null;
        $model->InvoiceDiscount = $data['InvoiceDiscount'] ?? null;
        $model->InvoiceFreight = $data['InvoiceFreight'] ?? null;
        $model->InvoiceRemark = $data['InvoiceRemark'] ?? '';
        $model->Name = $data['Name'] ?? '';
        $model->OrganisationNumber = $data['OrganisationNumber'] ?? '';
        $model->OurReference = $data['OurReference'] ?? '';
        $model->Phone1 = $data['Phone1'] ?? null;
        $model->Phone2 = $data['Phone2'] ?? null;
        $model->PriceList = $data['PriceList'] ?? null;
        $model->Project = $data['Project'] ?? null;
        $model->SalesAccount = $data['SalesAccount'] ?? null;
        $model->ShowPriceVATIncluded = $data['ShowPriceVATIncluded'] ?? null;
        $model->TermsOfDelivery = $data['TermsOfDelivery'] ?? '';
        $model->TermsOfPayment = $data['TermsOfPayment'] ?? '';
        $model->Type = $data['Type'] ?? null;
        $model->VATNumber = $data['VATNumber'] ?? '';
        $model->VATType = $data['VATType'] ?? null;
        $model->VisitingAddress = $data['VisitingAddress'] ?? null;
        $model->VisitingCity = $data['VisitingCity'] ?? null;
        $model->VisitingCountry = $data['VisitingCountry'] ?? null;
        $model->VisitingCountryCode = $data['VisitingCountryCode'] ?? null;
        $model->VisitingZipCode = $data['VisitingZipCode'] ?? null;
        $model->WWW = $data['WWW'] ?? '';
        $model->WayOfDelivery = $data['WayOfDelivery'] ?? '';
        $model->YourReference = $data['YourReference'] ?? '';
        $model->ZipCode = $data['ZipCode'] ?? null;


        return $model;
    }
}
