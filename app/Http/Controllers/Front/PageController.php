<?php

namespace App\Http\Controllers\Front;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    function detail($slug)
    {
        DB::listen(function ($query) {
            Log::info('SQL: ' . $query->sql);
            Log::info('Bindings: ' . json_encode($query->bindings));
            Log::info('Time: ' . $query->time . ' ms');
        });


        $data = Post::where('status', 'publish')
            ->where('slug', $slug)
            ->firstOrFail();

        return view('front.page.detail', [
            'data' => $data
        ]);
    }
}
