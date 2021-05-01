<?php

abstract class  Product
{
    protected $priceWithDis;
    protected $name,$price,$quantity;
    public function _construct()
    {
        $this->name ="nokai";
        $this->price;
        $this->quantity;


    }

    abstract public function setDiscount();
    abstract public function printDiscount();
}

class Laptop extends Product
{

    public function setDiscount()
    {
        $this->priceWithDis = $this->price * 0.95;
        return $this;
    }

    public function printDiscount()
    {
        echo "Laptop Name: $this->name <br>
        price:$this->price <br>
        quantity : $this->quantity <br>
        price After dis = $this->priceWithDis <br>   
        ";
    }
    
}     

class Mobile extends Product
{

    public function setDiscount()
    {
        $this->priceWithDis = $this->price * 0.90;
    }

    public function printDiscount()
    {
        echo "Mobile Name: $this->name <br>
        price:$this->price <br>
        quantity : $this->quantity <br>
        price After dis = $this->priceWithDis <br>   
        ";
    }
    
}

$Mac = new Laptop("Mac 100i",1200,3);
$Mac->setDiscount()->printDiscount();