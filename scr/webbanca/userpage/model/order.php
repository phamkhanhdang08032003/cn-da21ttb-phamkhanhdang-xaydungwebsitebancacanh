<?php
class Order
{
    public function getProductId()
    {
        return $this->Product_Id;
    }

    public function getCustomerId()
    {
        return $this->Customer_Id;
    }

    public function getProductPrice()
    {
        return $this->Product_Price;
    }

    public function getProductQuantity()
    {
        return $this->Product_Quantity;
    }

    public function getState()
    {
        return $this->State;
    }
    public function getProductimg()
    {
        return $this->Product_img;
    }
    public function setProductimg($Product_img): void
    {
        $this->Product_img = $Product_img;
    }
    public function setProductId($Product_Id): void
    {
        $this->Product_Id = $Product_Id;
    }

    public function setCustomerId($Customer_Id): void
    {
        $this->Customer_Id = $Customer_Id;
    }

    public function setProductPrice($Product_Price): void
    {
        $this->Product_Price = $Product_Price;
    }

    public function setProductQuantity($Product_Quantity): void
    {
        $this->Product_Quantity = $Product_Quantity;
    }

    public function setState($State): void
    {
        $this->State = $State;
    }

    public function __construct($Product_Id, $Customer_Id, $Product_Price, $Product_Quantity, $State)
    {
        $this->Product_Id = $Product_Id;
        $this->Product_img = $Product_img;
        $this->Customer_Id = $Customer_Id;
        $this->Product_Price = $Product_Price;
        $this->Product_Quantity = $Product_Quantity;
        $this->State = $State;
    }

    private $Product_img;
    private $Product_Id;
    private $Customer_Id;
    private $Product_Price;
    private $Product_Quantity;
    private $State;
}
