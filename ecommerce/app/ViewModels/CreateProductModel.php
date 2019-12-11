<?php
namespace App\ViewModels;
use App\Services\IProductService;
use Illuminate\Http\Request;
use App\Factories\ProductsFactory;
use App\ViewModels\ICreateProductModel;
use Illuminate\Database\Eloquent\ModelNotFoundException;
class CreateProductModel implements ICreateProductModel
{
    private $_productService;
    public $id;
    public $name;
    public $sku;
    public $image;
    public $description;
    public $category;
    public $price;
    public $discount;
    public function __construct(IProductService $productService, Request $request)
    {
        $this->_productService = $productService;
        $this->loadFields($request);
    }
    public function store()
    {
        $product = ProductsFactory::convertProductFromModel($this);
        $this->_productService->store($product);
    }
    public function update()
    {
        $product = ProductsFactory::convertProductFromModel($this);
        $this->_productService->update($product);
    }
    private function loadFields(Request $request)
    {
        $this->id = $request->id;
        $this->name = $request->name;
        $this->sku=$request->sku;
        $this->image = $request->image;
        $this->description=$request->description;
        $this->category = $request->category;
        $this->price = $request->price;
        $this->discount = $request->discount;
    }
}