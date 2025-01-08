<?php
class Customer
{
    private $Customer_id;
    private $Customer_Email;
    private $FirstName;
    private $LastName;
    private $Password;
    private $Address;
    private $PostCode;
    private $City;
    private $Phone;
    public function setCustomerId($Customer_id): void
    {
        $this->Customer_id = $Customer_id;
    }

    public function setCustomerEmail($Customer_Email): void
    {
        $this->Customer_Email = $Customer_Email;
    }

    public function setFirstName($FirstName): void
    {
        $this->FirstName = $FirstName;
    }

    public function setLastName($LastName): void
    {
        $this->LastName = $LastName;
    }

    public function setPassword($Password): void
    {
        $this->Password = $Password;
    }

    public function setAddress($Address): void
    {
        $this->Address = $Address;
    }

    public function setPostCode($PostCode): void
    {
        $this->PostCode = $PostCode;
    }

    public function setCity($City): void
    {
        $this->City = $City;
    }

    public function setPhone($Phone): void
    {
        $this->Phone = $Phone;
    }

    public function getCustomerId()
    {
        return $this->Customer_id;
    }

    public function getCustomerEmail()
    {
        return $this->Customer_Email;
    }

    public function getFirstName()
    {
        return $this->FirstName;
    }

    public function getLastName()
    {
        return $this->LastName;
    }

    public function getPassword()
    {
        return $this->Password;
    }

    public function getAddress()
    {
        return $this->Address;
    }

    public function getPostCode()
    {
        return $this->PostCode;
    }

    public function getCity()
    {
        return $this->City;
    }

    public function getPhone()
    {
        return $this->Phone;
    }

    // public function __construct($Customer_Email,  $FirstName,  $LastName,  $Password,  $Address,  $PostCode,  $City,  $Phone)
    // {
    //     $this->Customer_Email = $Customer_Email;
    //     $this->FirstName = $FirstName;
    //     $this->LastName = $LastName;
    //     $this->Password = $Password;
    //     $this->Address = $Address;
    //     $this->PostCode = $PostCode;
    //     $this->City = $City;
    //     $this->Phone = $Phone;
    // }
public function __construct(){}
}
