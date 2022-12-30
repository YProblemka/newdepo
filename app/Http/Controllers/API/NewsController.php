<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Http\Requests\NewsSortRequest;
use App\Models\News;
use Illuminate\Http\JsonResponse;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(NewsSortRequest $request): JsonResponse
    {
        return response()->json(
            [
                "message" => "success",
                "response" => News::query()
                    ->offset($request->get("offset"))
                    ->limit($request->get("limit"))
                    ->orderBy('created_at', 'DESC')
                    ->get()
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NewsRequest $request
     * @return JsonResponse
     */
    public function store(NewsRequest $request): JsonResponse
    {
        $news = News::query()->make($request->all());
        $news->setImgNameIfNotEmpty($request->file("img"));
        $news->save();
        return response()->json(["message" => "success", "response" => $news]);
    }

    /**
     * Display the specified resource.
     *
     * @param News $news
     * @return JsonResponse
     */
    public function show(News $news): JsonResponse
    {
        return response()->json(["message" => "success", "response" => $news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param NewsRequest $request
     * @param News $news
     * @return JsonResponse
     */
    public function update(NewsRequest $request, News $news): JsonResponse
    {
        $news->update($request->all());
        $news->setImgNameIfNotEmpty($request->file("img"));
        $news->save();

        return response()->json(["message" => "success", "response" => $news]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param News $news
     * @return JsonResponse
     */
    public function destroy(News $news): JsonResponse
    {
        $result = $news->delete();
        return response()->json(["message" => $result ? "success" : "error"], $result ? 200 : 500);
    }
}
