<?php

namespace App\Http\Controllers;

use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all(); //выбираем все строки из таблицы products
        return view('products.index', compact('products'));
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request,Product $product){
        $data = $request->validate([
            'title' => 'string|required',
            'price' => 'decimal:0,2|max:100000|min:0|required',
            'description' => 'string|required'
        ]); //валидация
        $product->create($data); //создаем новую запись в БД
        return redirect()->back();
    }

    public function show(Product $product){
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request,Product $product)
    {
         $data = $request->validate([
            'title' => 'string|required',
            'price' => 'decimal:0,2|max:100000|min:0|required',
            'description' => 'string|required'
        ]); //валидация
        $product->update($data); //создаем новую запись в БД
        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }

}
