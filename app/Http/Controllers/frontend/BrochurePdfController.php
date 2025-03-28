<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BrochurePdfController extends Controller
{
    public function download($file)
    {
        $filePath = "uploads/frontend/l3_template/program/{$file}";

        if (!Storage::disk('public')->exists($filePath)) {
            abort(404, 'Brochure not found');
        }

        $absolutePath = storage_path("app/public/{$filePath}");

        return response()->download($absolutePath, "brochure.pdf");
    }
}
