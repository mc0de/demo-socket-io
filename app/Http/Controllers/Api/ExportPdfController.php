<?php

namespace App\Http\Controllers\Api;

use App\Events\ExportPdfStatusUpdated;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExportPdfController extends Controller
{
    public function __invoke(Request $request)
    {
        event(new ExportPdfStatusUpdated($request->user(), 'Queued'));

        return response()->noContent();
    }
}
