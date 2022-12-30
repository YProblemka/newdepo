<?php

namespace App\Http\Controllers;

use App\Http\Requests\CallbackFormRequest;
use App\Mail\CallbackFormMail;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

class CallbackController extends Controller
{
    public function callbackForm(CallbackFormRequest $request): JsonResponse
    {
        Mail::to(config("app.app_mail"))
            ->send(new CallbackFormMail($request->get("name"), $request->get("email"), $request->get("phone"), $request->get("comment")));
        return response()->json(["message" => "success"]);
    }
}
