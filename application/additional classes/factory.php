<?php
abstract class ShopProducts
{
    function inshop();
}

class ShopFive extends ShopProducts
{
    function __construct(){}
    public function inshop()
    {
        return listofproducts();
    }
}

class ProductsReport
{
    public function repFive()
    {
        return new ShopFive();
    }
    // такие же функции для других магазинов
}