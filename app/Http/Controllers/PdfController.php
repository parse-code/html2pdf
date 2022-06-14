<?php

namespace App\Http\Controllers;

use Spatie\Browsershot\Browsershot;

class PdfController extends Controller
{
    public function __invoke()
    {
        $url    = request('url');
        $pdf    = Browsershot::url($url);
        $params = request()->except('url');

//        foreach ($params as $key => $value) {
//            $pdf->setOption($key, $value);
//        }

        return $pdf->pdf();
        return response()->make($pdf->pdf(), 200, [
            'Content-Type' => 'application/pdf',
        ]);
    }
}
