<?php
class Category
{
    public function getCategoryId()
    {
        return $this->category_id;
    }

    public function getCategoryName()
    {
        return $this->category_name;
    }

    public function getCategoryImage()
    {
        return $this->category_Image;
    }

    public function getCategoryDescription()
    {
        return $this->category_Description;
    }

    public function setCategoryId($category_id): void
    {
        $this->category_id = $category_id;
    }

    public function setCategoryName($category_name): void
    {
        $this->category_name = $category_name;
    }

    public function setCategoryImage($category_Image): void
    {
        $this->category_Image = $category_Image;
    }

    public function setCategoryDescription($category_Description): void
    {
        $this->category_Description = $category_Description;
    }

    public function __construct(  $category_name,  $category_Image,  $category_Description)
    {
        $this->category_name = $category_name;
        $this->category_Image = $category_Image;
        $this->category_Description = $category_Description;
    }
    private $category_id;
    private $category_name;
    private $category_Image;
    private $category_Description;
}
