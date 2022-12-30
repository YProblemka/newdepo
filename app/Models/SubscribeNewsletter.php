<?php

namespace App\Models;

use App\Mail\VerificationMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;

class SubscribeNewsletter extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'is_verified'
    ];

    public function getHashKey(): string
    {
        return Crypt::encryptString($this->email);
    }

    public function sendEmailVerificationNotification()
    {
        Mail::to($this->email)
            ->send(new VerificationMail($this->getHashKey()));
    }

    public function markEmailAsVerified()
    {
        $this->is_verified = true;
    }
}
