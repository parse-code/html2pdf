<?php

namespace App\Http\Controllers;

use Spatie\Browsershot\Browsershot;

class PdfController extends Controller
{
    public function __invoke()
    {
        $url    = request('url');
        $pdf    = Browsershot::url($url)->margins(10,10,10,10);
        return response()->make($pdf->pdf(),200, [
            'Content-Type' => 'application/pdf',
        ]);
    }
}
