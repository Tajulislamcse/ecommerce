<?php
namespace App\Factories;
use App\ViewModels\ICreateProductModel;
class ProductsFactory
{
    public static function createProducts($productsArr)
    {
        $products = [];
        foreach ($productsArr as $productArrItem) {
            $product = resolve('App\BusinessObjects\IProduct');
            $product->setId($productArrItem['id']);
            $product->setName($productArrItem['name']);
            $product->setSku($productArrItem['sku']);
            $product->setImage($productArrItem['image']);
            $product->setDescription($productArrItem['description']);
            $product->setCategory($productArrItem['category']);
            $product->setPrice($productArrItem['price']);
            $product->setDiscount($productArrItem['discount']);
           
            
            $products[] = $product;
        }
        return $products;
    }
    public static function convertProductFromModel(ICreateProductModel $model)
    {
        $product = resolve('App\BusinessObjects\IProduct');
        $product->setId($model->id);
        $product->setName($model->name);
        $product->setSku($model->sku);
        $product->setImage($model->image);
        $product->setDescription($model->description);
        $product->setCategory($model->category);
        $product->setPrice($model->price);
        $product->setDiscount($model->discount);
        return $product;
    }

    public static function convertfromModelToBOforRecord($product)
    {
        
        $productBO = resolve('App\BusinessObjects\Product');
        $productBO->setId($product['id']);
        $productBO->setName($product['name']);
        $productBO->setSku($product['sku']);
        $productBO->setImage($product['image']);
        $productBO->setDescription($product['description']);
        $productBO->setCategory($product['category']);
        $productBO->setPrice($product['price']);
        $productBO->setDiscount($product['discount']);
        return $productBO;
    }
}