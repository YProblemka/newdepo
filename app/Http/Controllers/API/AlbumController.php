<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\AlbumRequest;
use App\Models\Album;
use Illuminate\Http\JsonResponse;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(["message" => "success", "response" => Album::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AlbumRequest $request
     * @return JsonResponse
     */
    public function store(AlbumRequest $request): JsonResponse
    {
        $album = Album::query()->make($request->all());
        $album->save();
        return response()->json(["message" => "success", "response" => $album]);
    }

    /**
     * Display the specified resource.
     *
     * @param Album $album
     * @return JsonResponse
     */
    public function show(Album $album): JsonResponse
    {
        return response()->json(["message" => "success", "response" => $album]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AlbumRequest $request
     * @param Album $album
     * @return JsonResponse
     */
    public function update(AlbumRequest $request, Album $album): JsonResponse
    {
        $album->update($request->all());
        $album->save();

        return response()->json(["message" => "success", "response" => $album]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Album $album
     * @return JsonResponse
     */
    public function destroy(Album $album): JsonResponse
    {
        $result = $album->delete();
        return response()->json(["message" => $result ? "success" : "error"], $result ? 200 : 500);
    }
}
