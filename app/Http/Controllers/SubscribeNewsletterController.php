<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribeNewsletter\ConfirmationRequest;
use App\Http\Requests\SubscribeNewsletter\RegistrationRequest;
use App\Models\SubscribeNewsletter;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Crypt;

class SubscribeNewsletterController extends Controller
{
    public function subscription(RegistrationRequest $request): JsonResponse
    {
        $subscribeNewsletter = SubscribeNewsletter::query()->make($request->validated());
        $subscribeNewsletter->save();

        $subscribeNewsletter->sendEmailVerificationNotification();
        return response()->json(["message" => "success"]);
    }

    public function confirmation(ConfirmationRequest $request): JsonResponse
    {
        $subscribeNewsletter = SubscribeNewsletter::query()->where("email", Crypt::decryptString($request->get("hash")))->first() ?? new SubscribeNewsletter();

        if (!$subscribeNewsletter->exists) {
            return response()->json(["message" => "error"], 403);
        }

        $subscribeNewsletter->markEmailAsVerified();
        $subscribeNewsletter->save();
        return response()->json(["message" => "success"]);
    }

    public function unsubscribe(ConfirmationRequest $request): JsonResponse
    {
        $subscribeNewsletter = SubscribeNewsletter::query()->where("email", Crypt::decryptString($request->get("hash")))->first() ?? new SubscribeNewsletter();

        if (!$subscribeNewsletter->exists) {
            return response()->json(["message" => "error"], 403);
        }

        $subscribeNewsletter->delete();
        return response()->json(["message" => "success"]);
    }
}
