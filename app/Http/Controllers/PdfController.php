<?php

namespace App\Http\Controllers;

use Spatie\Browsershot\Browsershot;

class PdfController extends Controller
{
    public function __invoke()
    {
        $url    = request('url');
        $pdf    = Browsershot::url($url);
        return $pdf->pdf();
    }
}
