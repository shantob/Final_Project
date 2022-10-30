<?php

namespace App\Http\Controllers\Backend;

use App\Exports\SizeExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\SizeRequest;
use App\Models\Size;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SizeController extends Controller
{
    public function index()
    {

        $paginatePerPage = 20;
        $serialNo = 1;
        if ($pageNumber = request('page')) {
            $serialNo = $paginatePerPage * ($pageNumber - 1) + 1;
        }
        // $sizes=Size::all();
        $sizes = Size::latest()->paginate(10);
        return view('backend.sizes.index', compact('sizes','serialNo'));
    }

    public function create()
    {
        return view('backend.sizes.create');
    }

    public function store(SizeRequest $request)
    {
        $data = [
            'title' => $request->title,
            'is_active' => $request->is_active ? true :false,
        ];

        Size::create($data);

        return redirect()
            ->route('sizes.index')
            ->withMessage('Created Successfully!');
    }

    public function edit(Size $size)
    {
        return view('backend.sizes.edit', compact('size'));
    }

    public function update(SizeRequest $request, Size $size)
    {
        $data = [
            'title' => $request->title,
            'is_active' => $request->is_active ? true :false,   ];

        $size->update($data);

        return redirect()
            ->route('sizes.index')
            ->withMessage('Updated SuccessfullySize!');
    }

    public function show(Size $size)
    {
        return view('backend.sizes.show', compact('size'));
    }

    public function destroy(Size $size)
    {
        $size->delete();
        return redirect()
            ->route('sizes.index')
            ->withMessage('Deleted Successfully!');
    }

    public function trash()
    {
        $sizes = Size::onlyTrashed()->get();
        return view('backend.sizes.trash', compact('sizes'));
    }

    public function restore($id)
    {
        $size = Size::onlyTrashed()->find($id);
        $size->restore();

        return redirect()
            ->route('sizes.trash')
            ->withMessage('Restored Successfully!');
    } 

    public function delete($id)
    {
        $size = Size::onlyTrashed()->find($id);
        $size->forceDelete();

        return redirect()
            ->route('sizes.trash')
            ->withMessage('Parmanently Deleted Successfully!');
    } 

    public function downloadPdf()
    {
        $sizes = Size::all();
        $pdf = Pdf::loadView('backend.sizes.pdf', compact('sizes'));
        return $pdf->download('Color-list.pdf');
    }
    public function exportXl()
    {
        // $Courses = Course::all();
        // $xl = Excel::loadView('Courses.xl', compact('Courses'));
        return Excel::download(new SizeExport, 'Products-list.xlsx');
    }
}
