<?php

namespace App\Http\Controllers;

class ExcelDownloadController extends Controller
{

    function downloadFile()
    {
        $path = public_path('excel/contoh_format_dataset.xlsx');
        return response()->download($path);
    }
}
