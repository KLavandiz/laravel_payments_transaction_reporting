<?php

namespace App\DTO;

class ClientDTO
{
    public int $id;

    public string $number;
    public string $expiryMonth;
    public string $expiryYear;
    public ?string $startMonth;
    public ?string $startYear;
    public ?string $issueNumber;

    public string $email;
    public string $birthday;
    public ?string $gender;
    public ?string $billingTitle;
    public string $billingFirstName;
    public string $billingLastName;
    public ?string $billingCompany;
    public string $billingAddress1;
    public ?string $billingAddress2;
    public string $billingCity;
    public string $billingPostcode;
    public ?string $billingState;
    public string $billingCountry;
    public ?string $billingPhone;
    public ?string $billingFax;
    public ?string $shippingTitle;
    public string $shippingFirstName;
    public ?string $shippingCompany;
    public string $shippingAddress1;
    public ?string $shippingAddress2;
    public string $shippingCity;
    public string $shippingPostcode;
    public ?string $shippingState;
    public string $shippingCountry;
    public ?string $shippingPhone;
    public ?string $shippingFax;
    public ?string $deletedAt;

    /**
     * @param string $number
     * @param string $expiryMonth
     * @param string $expiryYear
     * @param string|null $startMonth
     * @param string|null $startYear
     * @param string|null $issueNumber
     * @param string $email
     * @param string $birthday
     * @param string|null $gender
     * @param string|null $billingTitle
     * @param string $billingFirstName
     * @param string $billingLastName
     * @param string|null $billingCompany
     * @param string $billingAddress1
     * @param string|null $billingAddress2
     * @param string $billingCity
     * @param string $billingPostcode
     * @param string|null $billingState
     * @param string $billingCountry
     * @param string|null $billingPhone
     * @param string|null $billingFax
     * @param string|null $shippingTitle
     * @param string $shippingFirstName
     * @param string|null $shippingCompany
     * @param string $shippingAddress1
     * @param string|null $shippingAddress2
     * @param string $shippingCity
     * @param string $shippingPostcode
     * @param string|null $shippingState
     * @param string $shippingCountry
     * @param string|null $shippingPhone
     * @param string|null $shippingFax
     * @param string|null $deletedAt
     */
    public function __construct(int $id, string $number, string $expiryMonth, string $expiryYear, ?string $startMonth, ?string $startYear, ?string $issueNumber, string $email, string $birthday, ?string $gender, ?string $billingTitle, string $billingFirstName, string $billingLastName, ?string $billingCompany, string $billingAddress1, ?string $billingAddress2, string $billingCity, string $billingPostcode, ?string $billingState, string $billingCountry, ?string $billingPhone, ?string $billingFax, ?string $shippingTitle, string $shippingFirstName, ?string $shippingCompany, string $shippingAddress1, ?string $shippingAddress2, string $shippingCity, string $shippingPostcode, ?string $shippingState, string $shippingCountry, ?string $shippingPhone, ?string $shippingFax, ?string $deletedAt)
    {
        $this->id = $id;
        $this->number = $number;
        $this->expiryMonth = $expiryMonth;
        $this->expiryYear = $expiryYear;
        $this->startMonth = $startMonth;
        $this->startYear = $startYear;
        $this->issueNumber = $issueNumber;
        $this->email = $email;
        $this->birthday = $birthday;
        $this->gender = $gender;
        $this->billingTitle = $billingTitle;
        $this->billingFirstName = $billingFirstName;
        $this->billingLastName = $billingLastName;
        $this->billingCompany = $billingCompany;
        $this->billingAddress1 = $billingAddress1;
        $this->billingAddress2 = $billingAddress2;
        $this->billingCity = $billingCity;
        $this->billingPostcode = $billingPostcode;
        $this->billingState = $billingState;
        $this->billingCountry = $billingCountry;
        $this->billingPhone = $billingPhone;
        $this->billingFax = $billingFax;
        $this->shippingTitle = $shippingTitle;
        $this->shippingFirstName = $shippingFirstName;
        $this->shippingCompany = $shippingCompany;
        $this->shippingAddress1 = $shippingAddress1;
        $this->shippingAddress2 = $shippingAddress2;
        $this->shippingCity = $shippingCity;
        $this->shippingPostcode = $shippingPostcode;
        $this->shippingState = $shippingState;
        $this->shippingCountry = $shippingCountry;
        $this->shippingPhone = $shippingPhone;
        $this->shippingFax = $shippingFax;
        $this->deletedAt = $deletedAt;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    public function getExpiryMonth(): string
    {
        return $this->expiryMonth;
    }

    public function setExpiryMonth(string $expiryMonth): void
    {
        $this->expiryMonth = $expiryMonth;
    }

    public function getExpiryYear(): string
    {
        return $this->expiryYear;
    }

    public function setExpiryYear(string $expiryYear): void
    {
        $this->expiryYear = $expiryYear;
    }

    public function getStartMonth(): ?string
    {
        return $this->startMonth;
    }

    public function setStartMonth(?string $startMonth): void
    {
        $this->startMonth = $startMonth;
    }

    public function getStartYear(): ?string
    {
        return $this->startYear;
    }

    public function setStartYear(?string $startYear): void
    {
        $this->startYear = $startYear;
    }

    public function getIssueNumber(): ?string
    {
        return $this->issueNumber;
    }

    public function setIssueNumber(?string $issueNumber): void
    {
        $this->issueNumber = $issueNumber;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getBirthday(): string
    {
        return $this->birthday;
    }

    public function setBirthday(string $birthday): void
    {
        $this->birthday = $birthday;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): void
    {
        $this->gender = $gender;
    }

    public function getBillingTitle(): ?string
    {
        return $this->billingTitle;
    }

    public function setBillingTitle(?string $billingTitle): void
    {
        $this->billingTitle = $billingTitle;
    }

    public function getBillingFirstName(): string
    {
        return $this->billingFirstName;
    }

    public function setBillingFirstName(string $billingFirstName): void
    {
        $this->billingFirstName = $billingFirstName;
    }

    public function getBillingLastName(): string
    {
        return $this->billingLastName;
    }

    public function setBillingLastName(string $billingLastName): void
    {
        $this->billingLastName = $billingLastName;
    }

    public function getBillingCompany(): ?string
    {
        return $this->billingCompany;
    }

    public function setBillingCompany(?string $billingCompany): void
    {
        $this->billingCompany = $billingCompany;
    }

    public function getBillingAddress1(): string
    {
        return $this->billingAddress1;
    }

    public function setBillingAddress1(string $billingAddress1): void
    {
        $this->billingAddress1 = $billingAddress1;
    }

    public function getBillingAddress2(): ?string
    {
        return $this->billingAddress2;
    }

    public function setBillingAddress2(?string $billingAddress2): void
    {
        $this->billingAddress2 = $billingAddress2;
    }

    public function getBillingCity(): string
    {
        return $this->billingCity;
    }

    public function setBillingCity(string $billingCity): void
    {
        $this->billingCity = $billingCity;
    }

    public function getBillingPostcode(): string
    {
        return $this->billingPostcode;
    }

    public function setBillingPostcode(string $billingPostcode): void
    {
        $this->billingPostcode = $billingPostcode;
    }

    public function getBillingState(): ?string
    {
        return $this->billingState;
    }

    public function setBillingState(?string $billingState): void
    {
        $this->billingState = $billingState;
    }

    public function getBillingCountry(): string
    {
        return $this->billingCountry;
    }

    public function setBillingCountry(string $billingCountry): void
    {
        $this->billingCountry = $billingCountry;
    }

    public function getBillingPhone(): ?string
    {
        return $this->billingPhone;
    }

    public function setBillingPhone(?string $billingPhone): void
    {
        $this->billingPhone = $billingPhone;
    }

    public function getBillingFax(): ?string
    {
        return $this->billingFax;
    }

    public function setBillingFax(?string $billingFax): void
    {
        $this->billingFax = $billingFax;
    }

    public function getShippingTitle(): ?string
    {
        return $this->shippingTitle;
    }

    public function setShippingTitle(?string $shippingTitle): void
    {
        $this->shippingTitle = $shippingTitle;
    }

    public function getShippingFirstName(): string
    {
        return $this->shippingFirstName;
    }

    public function setShippingFirstName(string $shippingFirstName): void
    {
        $this->shippingFirstName = $shippingFirstName;
    }

    public function getShippingCompany(): ?string
    {
        return $this->shippingCompany;
    }

    public function setShippingCompany(?string $shippingCompany): void
    {
        $this->shippingCompany = $shippingCompany;
    }

    public function getShippingAddress1(): string
    {
        return $this->shippingAddress1;
    }

    public function setShippingAddress1(string $shippingAddress1): void
    {
        $this->shippingAddress1 = $shippingAddress1;
    }

    public function getShippingAddress2(): ?string
    {
        return $this->shippingAddress2;
    }

    public function setShippingAddress2(?string $shippingAddress2): void
    {
        $this->shippingAddress2 = $shippingAddress2;
    }

    public function getShippingCity(): string
    {
        return $this->shippingCity;
    }

    public function setShippingCity(string $shippingCity): void
    {
        $this->shippingCity = $shippingCity;
    }

    public function getShippingPostcode(): string
    {
        return $this->shippingPostcode;
    }

    public function setShippingPostcode(string $shippingPostcode): void
    {
        $this->shippingPostcode = $shippingPostcode;
    }

    public function getShippingState(): ?string
    {
        return $this->shippingState;
    }

    public function setShippingState(?string $shippingState): void
    {
        $this->shippingState = $shippingState;
    }

    public function getShippingCountry(): string
    {
        return $this->shippingCountry;
    }

    public function setShippingCountry(string $shippingCountry): void
    {
        $this->shippingCountry = $shippingCountry;
    }

    public function getShippingPhone(): ?string
    {
        return $this->shippingPhone;
    }

    public function setShippingPhone(?string $shippingPhone): void
    {
        $this->shippingPhone = $shippingPhone;
    }

    public function getShippingFax(): ?string
    {
        return $this->shippingFax;
    }

    public function setShippingFax(?string $shippingFax): void
    {
        $this->shippingFax = $shippingFax;
    }

    public function getDeletedAt(): ?string
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(?string $deletedAt): void
    {
        $this->deletedAt = $deletedAt;
    }


}
