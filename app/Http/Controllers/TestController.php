<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\JsonResponse;
use App\Http\Traits\ApiController;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    use ApiController;

    /**
     * 管理者一覧API
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $test = Test::all();
        Log::info("■■■■■■■■■■■■");
        Log::info($test->toArray());
        Log::info("■■■■■■■■■■■■");
        return response()->json($this->camelizeRecursive($test->toArray()), 200);
    }
}
