<?php

namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ViewModels\ICreateProductModel;
use App\ViewModels\IViewProductModel;
use App\ViewModels\DataTablesModel;

class ProductController extends Controller
{
    //
    
    public function index(IViewProductModel $ViewProductModel)
    {
        $products = $ViewProductModel->getAll();
        return view('admin.products.index', compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ICreateProductModel $CreateProductModel)
    {
        $CreateProductModel->store();
        //return redirect()->back();
        return redirect('/admin/products');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, IViewProductModel $ViewProductModel)
    {
        $product = $ViewProductModel->get($id);
        return view('admin.products.edit', compact('product'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ICreateProductModel $createProductModel)
    {
        $createProductModel->update();
        return redirect('/admin/products');
    }
    public function getProductsJson(Request $request)
    {
        $dataTablesModel = new DataTablesModel($request);
        $model = resolve('App\ViewModels\IViewProductModel');
        return $model->getProductsJsonData($dataTablesModel);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, IViewProductModel $ViewProductModel)
    {
        $ViewProductModel->delete($id);
        return redirect('/admin/products');
    }
}