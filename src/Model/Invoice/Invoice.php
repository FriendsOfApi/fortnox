<?php

declare(strict_types=1);

namespace FAPI\Fortnox\Model\Invoice;

use FAPI\Fortnox\Model\CreatableFromArray;

class Invoice implements CreatableFromArray
{
    /** @var string|null */
    private $url;
    /** @var string|null */
    private $urlTaxReductionList;
    /** @var string|null */
    private $address1;
    /** @var string|null */
    private $address2;
    /** @var integer|null */
    private $administrationFee;
    /** @var integer|null */
    private $administrationFeeVat;
    /** @var integer|null */
    private $balance;
    /** @var integer|null */
    private $basisTaxReduction;
    /** @var bool */
    private $booked;
    /** @var bool */
    private $cancelled;
    /** @var string|null */
    private $city;
    /** @var string|null */
    private $comments;
    /** @var integer|null */
    private $contractReference;
    /** @var float|null */
    private $contributionPercent;
    /** @var integer|null */
    private $contributionValue;
    /** @var string|null */
    private $costCenter;
    /** @var string|null */
    private $country;
    /**
     * @var string|null It looks like this is a boolean in a string.. "false".
     */
    private $credit;
    /** @var string|null */
    private $creditInvoiceReference;
    /** @var string|null */
    private $currency;
    /** @var integer|null */
    private $currencyRate;
    /** @var integer|null */
    private $currencyUnit;
    /** @var string|null */
    private $customerName;
    /** @var string|null */
    private $customerNumber;
    /** @var string|null */
    private $deliveryAddress1;
    /** @var string|null */
    private $deliveryAddress2;
    /** @var string|null */
    private $deliveryCity;
    /** @var string|null */
    private $deliveryCountry;
    /** @var string|null */
    private $deliveryDate;
    /** @var string|null */
    private $deliveryName;
    /** @var string|null */
    private $deliveryZipCode;
    /** @var string|null */
    private $documentNumber;
    /** @var string|null */
    private $dueDate;
    /** @var array */
    private $ediInformation;
    /** @var string|null */
    private $euQuarterlyReport;
    /** @var array */
    private $emailInformation;
    /** @var string|null */
    private $externalInvoiceReference1;
    /** @var string|null */
    private $externalInvoiceReference2;
    /** @var integer|null */
    private $freight;
    /** @var float|null */
    private $freightVat;
    /** @var integer|null */
    private $gross;
    /** @var bool */
    private $houseWork;
    /** @var string|null */
    private $invoiceDate;
    /** @var string|null */
    private $invoicePeriodEnd;
    /** @var string|null */
    private $invoicePeriodStart;
    /** @var string|null */
    private $invoiceReference;
    /** @var array */
    private $InvoiceRows;
    /** @var string|null */
    private $invoiceType;
    /** @var array */
    private $labels;
    /** @var string|null */
    private $language;
    /** @var string|null */
    private $lastRemindDate;
    /** @var string|null */
    private $net;
    /** @var boolean|null */
    private $notCompleted;
    /** @var string|null */
    private $ocr;
    /** @var string|null */
    private $offerReference;
    /** @var string|null */
    private $orderReference;
    /** @var string|null */
    private $organisationNumber;
    /** @var string|null */
    private $ourReference;
    /** @var string|null */
    private $paymentWay;
    /** @var string|null */
    private $phone1;
    /** @var string|null */
    private $phone2;
    /** @var string|null */
    private $priceList;
    /** @var string|null */
    private $printTemplate;
    /** @var string|null */
    private $project;
    /** @var string|null */
    private $remarks;
    /** @var string|null */
    private $reminders;
    /** @var string|null */
    private $roundOff;
    /** @var boolean */
    private $sent;
    /** @var string|null */
    private $taxReduction;
    /** @var string|null */
    private $termsOfDelivery;
    /** @var string|null */
    private $termsOfPayment;
    /** @var integer|null */
    private $total;
    /** @var integer|null */
    private $totalToPay;
    /** @var float|null */
    private $totalVat;
    /** @var boolean|null */
    private $vatIncluded;
    /** @var string|null */
    private $voucherNumber;
    /** @var string|null */
    private $voucherSeries;
    /** @var string|null */
    private $voucherYear;
    /** @var string|null */
    private $wayOfDelivery;
    /** @var string|null */
    private $yourOrderNumber;
    /** @var string|null */
    private $yourReference;
    /** @var string|null */
    private $zipCode;

    private function __construct()
    {
    }

    public static function createFromArray(array $data)
    {
        $model = new self();
        $data = isset($data['Invoice']) ? $data['Invoice']: $data;

        $model->url = $data['@url'] ?? null;
        $model->urlTaxReductionList = $data['@urlTaxReductionList'] ?? null;
        $model->address1 = $data['Address1'] ?? '';
        $model->address2 = $data['Address2'] ?? '';
        $model->administrationFee = $data['AdministrationFee'] ?? null;
        $model->administrationFeeVat = $data['AdministrationFeeVAT'] ?? null;
        $model->balance = $data['Balance'] ?? null;
        $model->basisTaxReduction = $data['BasisTaxReduction'] ?? null;
        $model->booked = $data['Booked'] ?? false;
        $model->cancelled = $data['Cancelled'] ?? false;
        $model->city = $data['City'] ?? '';
        $model->comments = $data['Comments'] ?? '';
        $model->contractReference = $data['ContractReference'] ?? null;
        $model->contributionPercent = $data['ContributionPercent'] ?? null;
        $model->contributionValue = $data['ContributionValue'] ?? null;
        $model->costCenter = $data['CostCenter'] ?? '';
        $model->country = $data['Country'] ?? '';
        $model->credit = $data['Credit'] ?? null;
        $model->creditInvoiceReference = $data['CreditInvoiceReference'] ?? null;
        $model->currency = $data['Currency'] ?? null;
        $model->currencyRate = $data['CurrencyRate'] ?? 1;
        $model->currencyUnit = $data['CurrencyUnit'] ?? 1;
        $model->customerName = $data['CustomerName'] ?? null;
        $model->customerNumber = $data['CustomerNumber'] ?? null;
        $model->deliveryAddress1 = $data['DeliveryAddress1'] ?? null;
        $model->deliveryAddress2 = $data['DeliveryAddress2'] ?? null;
        $model->deliveryCity = $data['deliveryCity'] ?? '';
        $model->deliveryCountry = $data['deliveryCountry'] ?? '';
        $model->deliveryDate = $data['DeliveryDate'] ?? null;
        $model->deliveryName = $data['DeliveryName'] ?? '';
        $model->deliveryZipCode = $data['DeliveryZipCode'] ?? '';
        $model->documentNumber = $data['DocumentNumber'] ?? null;
        $model->dueDate = $data['DueDate'] ?? null;
        $model->ediInformation = $data['EDIInformation'] ?? [];
        $model->euQuarterlyReport = $data['EUQuarterlyReport'] ?? false;
        $model->emailInformation = $data['EmailInformation'] ?? [];
        $model->externalInvoiceReference1 = $data['externalInvoiceReference1'] ?? null;
        $model->externalInvoiceReference2 = $data['externalInvoiceReference2'] ?? null;
        $model->freight = $data['Freight'] ?? null;
        $model->freightVat = $data['FreightVAT'] ?? null;
        $model->gross = $data['Gross'] ?? null;
        $model->houseWork = $data['HouseWork'] ?? false;
        $model->invoiceDate = $data['InvoiceDate'] ?? null;
        $model->invoicePeriodEnd = $data['InvoicePeriodEnd'] ?? null;
        $model->invoicePeriodStart = $data['InvoicePeriodStart'] ?? null;
        $model->invoiceReference = $data['InvoiceReference'] ?? null;
        $model->InvoiceRows = $data['InvoiceRows'] ?? [];
        $model->invoiceType = $data['InvoiceType'] ?? null;
        $model->labels = $data['Labels'] ?? [];
        $model->language = $data['Language'] ?? null;
        $model->lastRemindDate = $data['LastRemindDate'] ?? null;
        $model->net = $data['Net'] ?? null;
        $model->notCompleted = $data['NotCompleted'] ?? null;
        $model->ocr = $data['OCR'] ?? null;
        $model->offerReference = $data['OfferReference'] ?? null;
        $model->orderReference = $data['OrderReference'] ?? null;
        $model->organisationNumber = $data['OrganisationNumber'] ?? null;
        $model->ourReference = $data['OurReference'] ?? null;
        $model->paymentWay = $data['PaymentWay'] ?? null;
        $model->phone1 = $data['Phone1'] ?? null;
        $model->phone2 = $data['Phone2'] ?? null;
        $model->priceList = $data['PriceList'] ?? null;
        $model->printTemplate = $data['PrintTemplate'] ?? null;
        $model->project = $data['Project'] ?? null;
        $model->remarks = $data['Remarks'] ?? null;
        $model->reminders = $data['Reminders'] ?? null;
        $model->roundOff = $data['RoundOff'] ?? null;
        $model->sent = $data['Sent'] ?? false;
        $model->taxReduction = $data['TaxReduction'] ?? null;
        $model->termsOfDelivery = $data['TermsOfDelivery'] ?? null;
        $model->termsOfPayment = $data['TermsOfPayment'] ?? null;
        $model->total = $data['Total'] ?? null;
        $model->totalToPay = $data['TotalToPay'] ?? null;
        $model->totalVat = $data['TotalVAT'] ?? null;
        $model->vatIncluded = $data['VATIncluded'] ?? null;
        $model->voucherNumber = $data['VoucherNumber'] ?? null;
        $model->voucherSeries = $data['VoucherSeries'] ?? null;
        $model->voucherYear = $data['VoucherYear'] ?? null;
        $model->wayOfDelivery = $data['WayOfDelivery'] ?? '';
        $model->yourOrderNumber = $data['YourOrderNumber'] ?? '';
        $model->yourReference = $data['YourReference'] ?? '';
        $model->zipCode = $data['ZipCode'] ?? '';

        return $model;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getUrlTaxReductionList(): string
    {
        return $this->urlTaxReductionList;
    }

    public function getAddress1(): string
    {
        return $this->address1;
    }

    public function getAddress2(): string
    {
        return $this->address2;
    }

    public function getAdministrationFee(): int
    {
        return $this->administrationFee;
    }

    public function getAdministrationFeeVat(): int
    {
        return $this->administrationFeeVat;
    }

    public function getBalance(): int
    {
        return $this->balance;
    }

    public function getBasisTaxReduction(): int
    {
        return $this->basisTaxReduction;
    }

    public function isBooked(): bool
    {
        return $this->booked;
    }

    public function isCancelled(): bool
    {
        return $this->cancelled;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getComments(): string
    {
        return $this->comments;
    }

    public function getContractReference(): int
    {
        return $this->contractReference;
    }

    public function getContributionPercent(): float
    {
        return $this->contributionPercent;
    }

    public function getContributionValue(): int
    {
        return $this->contributionValue;
    }

    public function getCostCenter(): string
    {
        return $this->costCenter;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getCredit(): string
    {
        return $this->credit;
    }

    public function getCreditInvoiceReference(): string
    {
        return $this->creditInvoiceReference;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getCurrencyRate(): int
    {
        return $this->currencyRate;
    }

    public function getCurrencyUnit(): int
    {
        return $this->currencyUnit;
    }

    public function getCustomerName(): string
    {
        return $this->customerName;
    }

    public function getCustomerNumber(): string
    {
        return $this->customerNumber;
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

    public function getDeliveryDate(): \DateTimeInterface
    {
        return new \DateTime($this->deliveryDate);
    }

    public function getDeliveryName(): string
    {
        return $this->deliveryName;
    }

    public function getDeliveryZipCode(): string
    {
        return $this->deliveryZipCode;
    }

    public function getDocumentNumber(): string
    {
        return $this->documentNumber;
    }

    public function getDueDate(): \DateTimeInterface
    {
        return new \DateTime($this->dueDate);
    }

    /**
     * @return array
     */
    public function getEdiInformation(): array
    {
        return $this->ediInformation;
    }

    public function getEuQuarterlyReport(): string
    {
        return $this->euQuarterlyReport;
    }

    /**
     * @return array
     */
    public function getEmailInformation(): array
    {
        return $this->emailInformation;
    }

    public function getExternalInvoiceReference1(): string
    {
        return $this->externalInvoiceReference1;
    }

    public function getExternalInvoiceReference2(): string
    {
        return $this->externalInvoiceReference2;
    }

    public function getFreight(): int
    {
        return $this->freight;
    }

    public function getFreightVat(): float
    {
        return $this->freightVat;
    }

    public function getGross(): int
    {
        return $this->gross;
    }

    public function isHouseWork(): bool
    {
        return $this->houseWork;
    }

    public function getInvoiceDate(): \DateTimeInterface
    {
        return new \DateTime($this->invoiceDate);
    }

    public function getInvoicePeriodEnd(): string
    {
        return $this->invoicePeriodEnd;
    }

    public function getInvoicePeriodStart(): string
    {
        return $this->invoicePeriodStart;
    }

    public function getInvoiceReference(): string
    {
        return $this->invoiceReference;
    }

    /**
     * @return array
     */
    public function getInvoiceRows(): array
    {
        return $this->InvoiceRows;
    }

    public function getInvoiceType(): string
    {
        return $this->invoiceType;
    }

    /**
     * @return array
     */
    public function getLabels(): array
    {
        return $this->labels;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function getLastRemindDate(): \DateTimeInterface
    {
        return new \DateTime($this->lastRemindDate);
    }

    public function getNet(): string
    {
        return $this->net;
    }

    public function getNotCompleted(): bool
    {
        return $this->notCompleted;
    }

    public function getOcr(): string
    {
        return $this->ocr;
    }

    public function getOfferReference(): string
    {
        return $this->offerReference;
    }

    public function getOrderReference(): string
    {
        return $this->orderReference;
    }

    public function getOrganisationNumber(): string
    {
        return $this->organisationNumber;
    }

    public function getOurReference(): string
    {
        return $this->ourReference;
    }

    public function getPaymentWay(): string
    {
        return $this->paymentWay;
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

    public function getPrintTemplate(): string
    {
        return $this->printTemplate;
    }

    public function getProject(): string
    {
        return $this->project;
    }

    public function getRemarks(): string
    {
        return $this->remarks;
    }

    public function getReminders(): string
    {
        return $this->reminders;
    }

    public function getRoundOff(): string
    {
        return $this->roundOff;
    }

    public function isSent(): bool
    {
        return $this->sent;
    }

    public function getTaxReduction(): string
    {
        return $this->taxReduction;
    }

    public function getTermsOfDelivery(): string
    {
        return $this->termsOfDelivery;
    }

    public function getTermsOfPayment(): string
    {
        return $this->termsOfPayment;
    }

    public function getTotal(): int
    {
        return $this->total;
    }

    public function getTotalToPay(): int
    {
        return $this->totalToPay;
    }

    public function getTotalVat(): float
    {
        return $this->totalVat;
    }

    public function getVatIncluded(): bool
    {
        return $this->vatIncluded;
    }

    public function getVoucherNumber(): string
    {
        return $this->voucherNumber;
    }

    public function getVoucherSeries(): string
    {
        return $this->voucherSeries;
    }

    public function getVoucherYear(): string
    {
        return $this->voucherYear;
    }

    public function getWayOfDelivery(): string
    {
        return $this->wayOfDelivery;
    }

    public function getYourOrderNumber(): string
    {
        return $this->yourOrderNumber;
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
