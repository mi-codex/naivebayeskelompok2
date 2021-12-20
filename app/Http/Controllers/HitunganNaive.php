<?php

namespace App\Http\Controllers;

use App\Exports\NaiveExport;
use App\Imports\NaiveImport;
use Maatwebsite\Excel\Facades\Excel;


use App\Http\Controllers\Controller;



use Illuminate\Http\Request;
use App\Models\Naive;

class HitunganNaive extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $items = Naive::all();

        return view('pages.admin.perhitungan')->with([
            'items' => $items
        ]);
    }
    //EXPORT EXCEL ----------------------
    public function naiveExportExcel()
    {
        return Excel::download(new NaiveExport, 'Datasetmahasiswa.xlsx');
    }

    //IMPORT EXCEL ----------------------
    public function naiveImportExcel(Request $request)
    {
       
        Excel::import(new NaiveImport, 'datasets.xlsx');

        return redirect()->route('naive')->with('pesan', 'Dataset Berhasil ditambakan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    function downloadFile()
    {
        $path = public_path('excel/contoh_format_dataset.xlsx');
        return response()->download($path);
    }
}
