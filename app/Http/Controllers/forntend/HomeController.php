<?php

namespace App\Http\Controllers\Forntend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Card;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function header()
   {
      $category = Category::all();
      $carousels = Carousel::latest()->get();
      return view('components.forntend.partials.header', compact('category', 'carousels'));
   }


   public function index()
   {
      if ($key = request('product_name')) {

         $productall = Product::latest()
            ->where('name', 'SOUNDS LIKE', $key . "%")
            // ->where("SOUNDEX('name_am') = SOUNDEX($key)")
            ->paginate(2)
            ->fragment('productall');
      } else {
         $productall = Product::where('is_active', '1')->latest()->paginate(12)->fragment('productall');
         // $product = Product::where('status', '1')->get();
      }
      if ($key = request('product_name')) {
         $category = Category::latest()
            ->where('name', 'LIKE', "%{$key}%")
            ->paginate(1);
      } else {
         $category = Category::paginate(5);
      }
      // if ($key = request('product_name')) {
      //    $blogs = Blog::latest()
      //       ->where('title', 'LIKE', "%{$key}%")
      //       ->paginate(1);
      // } else {
      //    $blogs = Blog::paginate(3)->fragment('blogs');
      // }
      return view("forntend/index", compact('category', 'productall'));
   }

   public function productDetails(Product $product)
   {
      return view('forntend/productdetels', compact('product'));
   }

   public function productListCategory(Category $category)
   {
      return view('forntend/categoryProductList', compact('category'));
   }


   public function productlist()
   {
      if ($key = request('p_name')) {

         $products = Product::latest()
            ->where('name', 'SOUNDS LIKE', "%" . $key . "%")
            // ->where("SOUNDEX('name_am') = SOUNDEX($key)")
            ->paginate(5);
      } else {
         $products = Product::all();
      }
      $sizes = Size::all();
      $colors = Color::all();
      return view("forntend/productlist", compact('products', 'sizes', 'colors'));
   }


   public function contact()
   {
      return view("forntend/contact");
   }

   public function about()
   {
      return view("forntend/about");
   }

   public function addtocard()
   {
      return view("forntend/addtocard");
   }

   public function checkout(Card $card)
   {
      // $carts = Card::all();
      // $products = $card->products()->get();
      //dd($products);
      return view("forntend/checkout");
   }

   public function productdetels()
   {
      return view("forntend/productdetels");
   }

   public function thankyou()
   {
      return view("forntend/thankyou");
   }
   public function invoice()
   {
      return view("forntend/invoice");
   }
   public function downloadPdf()
   {
      $products = Product::all();
      $pdf = Pdf::loadView('backend.product.pdf', compact('products'));
      return $pdf->download('product-list.pdf');
   }

   public function login()
   {
      return view("forntend/login");
   }
}
