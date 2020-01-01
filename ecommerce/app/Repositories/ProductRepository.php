<?php
namespace App\Repositories;
//use App\Repositories\Repository;
use App\Factories\ProductsFactory as ProductsFactory;
class ProductRepository extends Repository implements IProductRepository
{
    public function __construct()
    {
        $product = resolve('App\Models\ProductDTO');
        parent::setModel($product);
    }
    public function getWithFilter($field, $fieldValue, $orderColumn, $orderDirection, $itemCount)
    {
        return $this->model->where($field, 'like', '%'.$fieldValue.'%')
            ->orderBy($orderColumn, $orderDirection)
            ->take($itemCount)
            ->get();
    }
    public function add($product)
    {
        $product_arr = [
            'name' => $product->getName(),
             'sku'=>$product->getSku(),
             'image' => $product->getImage(),
             'description'=>$product->getDescription(),
             'category' => $product->getCategory(),
             'price' => $product->getPrice(),
             'discount' => $product->getDiscount()
        ];
        parent::add($product_arr);
    }
    public function getAll()
    {
        $productsArr = parent::getAll();
        return ProductsFactory::createProducts($productsArr);
    }
    public function get($id)
    {   
        //$id = $product->getId();
        $product = parent::get($id);
        
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
        
        
        //return ProductsFactory::createProducts($product);
    }
    public function delete($product)
    {
        $id = $product->getId();
        parent::delete($id);
    }
    public function update($product, $id)
    {
        $product_arr = [
            'name' => $product->getName(),
            'sku'=>$product->getSku(),
            'image' => $product->getImage(),
             'description'=>$product->getDescription(),
             'category' => $product->getCategory(),
              'price' => $product->getPrice(),
              'discount' => $product->getDiscount()
        ];
        $id = $product->getId();
        parent::update($product_arr, $id);
    }
    public function getPagedProducts($searchText, $sortOrder, $pageIndex, $pageSize)
    {
        $productsArr = $this->getWithFilter('name', $searchText, $sortOrder->columnName, $sortOrder->columnDirection, $pageSize);
        return ProductsFactory::createProducts($productsArr);
    }
    public function getTotalProductCount()
    {
        return count($this->getAll());
    }
    public function getTotalDisplayableProducts($searchText)
    {
        return count($this->getWithFilter('name', $searchText, 'name', 'asc', 8));
    }
}