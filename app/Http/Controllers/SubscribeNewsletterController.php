<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribeNewsletter\ConfirmationRequest;
use App\Http\Requests\SubscribeNewsletter\RegistrationRequest;
use App\Models\SubscribeNewsletter;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Contracts\View\View;
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

    public function confirmation(ConfirmationRequest $request): View
    {
        try {
            $email = Crypt::decryptString($request->get("hash"));
        } catch (DecryptException $e) {
            return view("mailing-result", ["message" => "Почта не найдена"]);
        }


        $subscribeNewsletter = SubscribeNewsletter::query()->where("email", $email)->first() ?? new SubscribeNewsletter();

        if (!$subscribeNewsletter->exists) {
            return view("mailing-result", ["message" => "Почта не найдена"]);
        }

        $subscribeNewsletter->markEmailAsVerified();
        $subscribeNewsletter->save();
        return view("mailing-result", ["message" => "Почта подтверждена"]);
    }

    public function unsubscribe(ConfirmationRequest $request): View
    {
        try {
            $email = Crypt::decryptString($request->get("hash"));
        } catch (DecryptException $e) {
            return view("mailing-result", ["message" => "Почта не найдена"]);
        }

        $subscribeNewsletter = SubscribeNewsletter::query()->where("email", $email)->first() ?? new SubscribeNewsletter();

        if (!$subscribeNewsletter->exists) {
            return view("mailing-result", ["message" => "Почта не найдена"]);
        }

        $subscribeNewsletter->delete();
        return view("mailing-result", ["message" => "Успешно отписан"]);
    }
}
