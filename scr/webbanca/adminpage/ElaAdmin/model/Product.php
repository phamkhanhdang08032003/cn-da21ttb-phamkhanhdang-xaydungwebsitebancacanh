<?php
class Product
{
    public function getProductName()
    {
        return $this->Product_Name;
    }

    public function getProductDesc()
    {
        return $this->Product_Desc;
    }

    public function getProductFirstImg()
    {
        return $this->Product_FirstImg;
    }

    public function getProductSecondImg()
    {
        return $this->Product_SecondImg;
    }

    public function getProductThirdImg()
    {
        return $this->Product_ThirdImg;
    }

    public function getProductPrice()
    {
        return $this->Product_Price;
    }

    public function getProductStock()
    {
        return $this->Product_Stock;
    }

    public function getCategoryId()
    {
        return $this->Category_Id;
    }

    public function setProductName($Product_Name): void
    {
        $this->Product_Name = $Product_Name;
    }

    public function setProductDesc($Product_Desc): void
    {
        $this->Product_Desc = $Product_Desc;
    }

    public function setProductFirstImg($Product_FirstImg): void
    {
        $this->Product_FirstImg = $Product_FirstImg;
    }

    public function setProductSecondImg($Product_SecondImg): void
    {
        $this->Product_SecondImg = $Product_SecondImg;
    }

    public function setProductThirdImg($Product_ThirdImg): void
    {
        $this->Product_ThirdImg = $Product_ThirdImg;
    }

    public function setProductPrice($Product_Price): void
    {
        $this->Product_Price = $Product_Price;
    }

    public function setProductStock($Product_Stock): void
    {
        $this->Product_Stock = $Product_Stock;
    }

    public function setCategoryId($Category_Id): void
    {
        $this->Category_Id = $Category_Id;
    }
    public function __construct()
    {

    }
    private $Product_Name;
    private $Product_Desc;
    private $Product_FirstImg;
    private $Product_SecondImg;
    private $Product_ThirdImg;
    private $Product_Price;
    private $Product_Stock;
    private $Category_Id;
}
