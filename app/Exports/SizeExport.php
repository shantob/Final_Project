<?php

namespace App\Exports;

use App\Models\Brand;
use App\Models\Size;
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

class SizeExport implements FromView
{
    public function view(): View
    {
        return view('backend.sizes.pdf', [
            'sizes' =>Size::all(),
            
        ]);
    }
}
