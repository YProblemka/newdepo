<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageRequest;
use App\Models\Image;
use Illuminate\Http\JsonResponse;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(["message" => "success", "response" => Image::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ImageRequest $request
     * @return JsonResponse
     */
    public function store(ImageRequest $request): JsonResponse
    {
        $image = Image::query()->make($request->all());
        $image->setImgNameIfNotEmpty($request->file("img"));
        $image->save();
        return response()->json(["message" => "success", "response" => $image]);
    }

    /**
     * Display the specified resource.
     *
     * @param Image $image
     * @return JsonResponse
     */
    public function show(Image $image): JsonResponse
    {
        return response()->json(["message" => "success", "response" => $image]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ImageRequest $request
     * @param Image $image
     * @return JsonResponse
     */
    public function update(ImageRequest $request, Image $image): JsonResponse
    {
        $image->update($request->all());
        $image->setImgNameIfNotEmpty($request->file("img"));
        $image->save();

        return response()->json(["message" => "success", "response" => $image]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Image $image
     * @return JsonResponse
     */
    public function destroy(Image $image): JsonResponse
    {
        $result = $image->delete();
        return response()->json(["message" => $result ? "success" : "error"], $result ? 200 : 500);
    }
}
