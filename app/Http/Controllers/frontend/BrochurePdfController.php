<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BrochurePdfController extends Controller
{
//     public function download($file)
//     {
//         $filePath = "uploads/frontend/l3_template/program/{$file}";
// // dd($filePath);
//         if (!Storage::disk('public')->exists($filePath)) {
//             abort(404, 'Brochure not found');
//         }

//         $absolutePath = storage_path("app/public/{$filePath}");

//         return response()->download($absolutePath, "brochure.pdf");
//     }

public function download($file)
{
    // Define the relative path inside storage/app/public/
    $relativePath = "uploads/frontend/l3_template/program/{$file}";

    // Check if the file exists
    if (!Storage::disk('public')->exists($relativePath)) {
        abort(404, 'Brochure not found');
    }

    // Get the absolute path
    $absolutePath = Storage::disk('public')->path($relativePath);

    // Debugging: Check if file exists and its size
    if (!file_exists($absolutePath) || filesize($absolutePath) == 0) {
        abort(500, "File not found or empty: $absolutePath");
    }

    // Return the file as a download
    return response()->download($absolutePath, $file);
}
}
