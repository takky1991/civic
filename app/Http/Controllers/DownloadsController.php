<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class DownloadsController extends Controller
{
    public function getPdf()
    {
        $pathToFile = storage_path('app/public/pdf/gradjevinska-limarija.pdf');

        $headers = ['Content-Type: application/pdf'];

        return response()->file($pathToFile, $headers);
    }

    public function getEpsPdf()
    {
        $pathToFile = storage_path('app/public/pdf/thermopor.pdf');

        $headers = ['Content-Type: application/pdf'];

        return response()->file($pathToFile, $headers);
    }
}