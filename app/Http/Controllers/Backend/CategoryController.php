<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Image;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view("backend/category/home", compact('categories'));
    }

    public function store(CategoryRequest $request)
    {
        $data = [
            'name' => $request->name,
            'is_active' => $request->is_active ? true : false,
        ];

       $category= Category::create($data);

        $category->images()->create([
            'image' => $this->uploadImage($request->file('image')),

            'uploated_by' => Auth::id()
        ]);
        return redirect()->route('category.index')->with('success', 'SuccessFully Created Category');
    }

    public function create()
    {
        return view("backend/category/categoryadd");
    }

    public function show(Category $category)
    {
        //dd($category);
        //$products= Product::find($name);
        // $categoryShow = Category::find($id);
        $products = $category->products()->get();
        return view('backend.category.categoryshow', compact('category', 'products'));
    }

    public function edit(Category $category)
    {
        // $categoryedit = Category::find($id);
        return view("backend/category/categoryedit", compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        //dd($request);
        // $categorie = Category::find($id);
        $data = [
            'name' => $request->name,
        ];
        $category->update($data);
        return redirect()->route('category.index')->with('success', 'Category edit Successdfully');
    }

    public function destroy(Category $category)
    {
        // $categoryDestroy = Category::find($id);
        $category->delete();
        return redirect()->route('category.index')->with('success', 'SuccessFully Deleted Category');
    }
    public function trash()
    {
        $categories = Category::onlyTrashed()->get();
        return view("backend/category/trash", compact('categories'));
    }
    public function restore($id)
    {
        $category = Category::onlyTrashed()->find($id);
        $category->restore();
        return redirect()->route('category.trash')->with('success', 'SuccessFully Restored Category');
    }

    public function delete($id)
    {
        $category = Category::onlyTrashed()->find($id);
        $category->forceDelete();

        return redirect()
            ->route('category.trash')
            ->with('success', 'Parmanent Deleted Successfully!');
    }
    public function downloadPdf()
    {
        $categories = Category::all();
        $pdf = Pdf::loadView('backend.category.pdf', compact('categories'));
        return $pdf->download('category-list.pdf');
    }
    public function uploadImage($file)
    {
        $fileName = date('y-m-d') . '-' . time() . '.' . $file->getClientOriginalExtension();
        // $file->move(storage_path('app/public/categories'), $fileName);

        Image::make($file)
            ->resize(200, 200)
            ->save(storage_path() . '/app/public/categories/' . $fileName);

        return $fileName;
    }
}
