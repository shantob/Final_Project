<?php

namespace App\Exports;

use App\Models\Brand;

use Maatwebsite\Excel\Concerns\FromCollection;

// class ProductExport implements FromCollection
// {
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function collection()
//     {
//         return Product::all();
//     }
// }
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class BrandExport implements FromView
{
    public function view(): View
    {
        return view('Brands.pdf', [
            'brands' => Brand::all(),
            
        ]);
    }
}
