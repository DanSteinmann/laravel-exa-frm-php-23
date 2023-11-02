<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ArticleApiController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return response()->json($article);
    }

    public function destroy(Article $article)
    {
        if ($article->quantity > 0) {

            return response()->json(['error' => 'Stock must be 0 before deletion'], 422);
        }

        $article->delete();

        return response()->json(null, 200);
    }
}
