<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Image;

class ProductController extends Controller
{
    // public function index()
    // {
    //     $allproduct = Product::all();
    //     $index = Product::orderby('id', 'DESC')->paginate(10);
    //     return view("backend/product/index", compact('index', 'allproduct'));
    // }

    public function index()
    {
        $paginatePerPage = 20;
        $serialNo = 1;
        if ($pageNumber = request('page')) {
            $serialNo = $paginatePerPage * ($pageNumber - 1) + 1;
        }
        //dd($serialNo);
        $allproduct = Product::all();
        $productlist = Product::with('category')->orderby('id', 'DESC')->paginate($paginatePerPage);

        // $category = Category::with('category')->find('all');
        // $categories= $category->category->toArray();


        return view("backend.product.index", compact('productlist', 'allproduct', 'serialNo'));
    }
    //
    public function store(ProductRequest $request)
    {
       // dd($request);
        $data = [

            'name' => $request->name,
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'description' => $request->description,
            'price' => $request->price,
            'tags' => $request->tags,
            'img_alt' => $request->img_alt,
            'is_active' => $request->is_active ? true : false,
        ];

        $product = Product::create($data);
        foreach ($request->file('image') as $img) {
        $product->images()->create([
            'image' => $this->uploadImage($img),
            'uploated_by' => Auth::id()
        ]);

    }
        $product->colors()->attach($request->colors);
        $product->sizes()->attach($request->sizes);
        return redirect()->route('product.index')->with('success', 'Product Created SuccessFully !!!');
    }


    public function create()
    {
        $categories = Category::pluck('name', 'id')->toArray();
        $brands = Brand::pluck('name', 'id')->toArray();
        $colors = Color::pluck('name', 'id')->toArray();
        $sizes = Size::pluck('title', 'id')->toArray();
       // dd($sizes);
        return view("backend.product.create", compact('categories', 'brands', 'colors', 'sizes'));
    }


    public function edit(Product $product)
    {
        // $products = Product::find($id);
        // $categories = Category::all();
        $brands = Brand::pluck('name', 'id')->toArray();
        $colors = Color::pluck('name', 'id')->toArray();
        $sizes = Size::pluck('title', 'id')->toArray();
        $selectColors = $product->colors()->pluck('id')->toArray();
        $selectSizes = $product->sizes()->pluck('id')->toArray();
        $categories =  Category::pluck('name', 'id')->toArray();
        return view("backend.product.edit", compact('product', 'categories', 'brands', 'colors', 'selectColors', 'sizes', 'selectSizes'));
    }


    public function update(ProductRequest $request, Product $product)
    {
        // $products = Product::find($id);

        $data = [
            'name' => $request->name,
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'is_active' => $request->is_active ? true : false,
            'description' => $request->description,
            'price' => $request->price,
            'tags' => $request->tags,
            'img_alt' => $request->img_alt,
        ];
        if ($request->hasFile('image')) {
            // $data['image'] = $this->uploadImage($request->file('image'));
            foreach ($request->file('image') as $img) {
                $product->images()->update([
                    'image' => $this->uploadImage($img),
                    'uploated_by' => Auth::id()
                ]);
        
            }
        }


        $product->update($data);
        //dd($products);
        $product->colors()->sync($request->colors);
        $product->sizes()->sync($request->sizes);

        return redirect()->route('product.index')->with('success', 'Product Updated SuccessFully !!!');
    }

    public function show(Product $product)
    {
        // $productShow = Product::find($id);
        $colors = $product->colors()->get();
        $sizes = $product->sizes()->get();
        return view("backend.product.show", compact('product', 'colors', 'sizes'));
    }

    public function destroy(Product $product)
    {
        // $productDelete = Product::find($id);
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product Delete SuccessFully !!!');
    }

    public function trash()
    {

        $product = Product::onlyTrashed()->get();
        return view("backend/product/trash", compact('product'));
    }
    public function restore($id)
    {
        $product = Product::onlyTrashed()->find($id);
        $product->restore();
        return redirect()->route('product.trash')->with('success', 'SuccessFully Restored Category');
    }

    public function delete($id)
    {
        //dd($id);

        $product = Product::onlyTrashed()->find($id);
        $product->colors()->detach();
        $product->forceDelete();

        return redirect()
            ->route('product.trash')
            ->with('success', 'Parmanent Deleted Successfully!');
    }
    public function downloadPdf()
    {
        $products = Product::all();
        $pdf = Pdf::loadView('backend.product.pdf', compact('products'));
        return $pdf->download('product-list.pdf');
    }

    public function uploadImage($file)
    {
        $fileName = date('y-m-d') . '-' . time() . '.' . $file->getClientOriginalExtension();
        // $file->move(storage_path('app/public/categories'), $fileName);

        Image::make($file)
            ->resize(200, 200)
            ->save(storage_path() . '/app/public/products/' . $fileName);

        return $fileName;
    }
}
