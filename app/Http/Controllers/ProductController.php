<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category_product;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\deleteAlert;

class ProductController extends Controller
{
    use deleteAlert;
    protected $product;

    public function __construct(product $product)
    {
        $this->product = $product;
    }
    public function show(Request $request)
    {
        if(request()->has('key') || request()->input('category_id')){
            $posts = $this->product->Search()->orderBy('id','DESC')->paginate(5);
        }else{
            $posts = product::orderBy('id', 'DESC')->paginate(5);
        }

        $categoryProducts = Category_product::get();
        

        return view('home.product.product',compact('posts','categoryProducts'));
    }
    public function delete($id)
    {
        return $this->deleteAlert($id,$this->product);
    }
    public function create()
    {
        $category = Category_product::get();
        return view('home.product.create',compact('category'));
    }
    public function store(ProductRequest $request)
    {
        $product = [
            'name_product' => $request->name,
            'price' => $request->price,
            'sale'  => $request->sale,
            'category_id' => $request->category_id,
            'status' => $request->status,
            'image' => '',
            'product_id' => 1
        ] ;
        $this->product->create($product);
        session()->flash('message','thêm món  thành công!');
        return redirect()->route('product.show');
    }
    public function edit($id)
    {
        $category = Category_product::get();
        $product = $this->product->find($id);
        return view('home.product.edit',compact('product','category'));
    }
    public function update(Request $request)
    {
        $product = [
            'name_product' => $request->name,
            'price' => $request->price,
            'sale'  => $request->sale,
            'category_id' => $request->category_id,
            'status' => $request->status,
            'image' => '',
            'product_id' => 1
        ] ;
        $this->product->update($product);
        session()->flash('message','update món ăn thành công!');
        return redirect()->route('product.show');
    }
}
