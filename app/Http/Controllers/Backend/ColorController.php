<?php

namespace App\Http\Controllers\backend;

use App\Exports\ColorExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\ColorRequest;
use App\Models\Color;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ColorController extends Controller
{

    public function index()
    {
        $colors = Color::all();
        return view("backend.color.index", compact('colors'));
    }

    public function store(ColorRequest $request)
    {
        $data = [
            'name' => $request->name,
            'color_code' => $request->color_code,
            'description' => $request->description,
            'is_active' => $request->is_active ? true : false,
        ];

        Color::create($data);

        return redirect()->route('color.index')->with('success', 'SuccessFully Created Color');
    }

    public function create()
    {
        return view("backend/color/create");
    }
    public function edit(Color $color)
    {
        // $categoryedit = Category::find($id);
        return view("backend/color/edit", compact('color'));
    }

    public function update(ColorRequest $request, Color $color)
    {
        //dd($request);
        // $categorie = Category::find($id);
        $data = [
            'name' => $request->name,
            'is_active' => $request->is_active ? true : false,
        ];
        $color->update($data);
        return redirect()->route('color.index')->with('success', 'Color edit Successdfully');
    }

    public function destroy(Color $color)
    {
        // $categoryDestroy = Category::find($id);
        // foreach ($color->brand as $brand) {
        //     foreach ($brand->product as $product) {
        //         $product->delete();
        //     }
        //     $brand->delete();
        // }

        // $color->products()->detach();
        $color->delete();
        return redirect()->route('color.index')->with('success', 'SuccessFully Deleted Color');
    }

    public function trash()
    {

        $colors = Color::onlyTrashed()->get();
        return view('backend.color.trash', compact('colors'));
    }
    public function restore($id)
    {
        $color = Color::onlyTrashed()->find($id);
        $color->restore();
        return redirect()
            ->route('colors.trash')
            ->withMessage(' Restored!');
    }
    public function delete($id)
    {
        $color = Color::onlyTrashed()->find($id);
        $color->forceDelete();
        return redirect()
            ->route('colors.trash')
            ->withMessage('Permanently Deleted Successfully!');
    }

    public function downloadPdf()
    {

        $colors = Color::all();
        $pdf = Pdf::loadView('backend.color.pdf', compact('colors'));
        return $pdf->download('colors-list.pdf');
    }

    public function exportXl()
    {
        // $Courses = Course::all();
        // $xl = Excel::loadView('Courses.xl', compact('Courses'));
        return Excel::download(new ColorExport, 'colors-list.xlsx');
    }
}
