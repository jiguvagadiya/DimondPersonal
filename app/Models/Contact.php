<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'message'];

    /**
     * Boot the model and add events.
     */
    protected static function boot()
    {
        parent::boot();

        static::created(function ($contact) {
            $adminEmail = "jignasha.abril@gmail.com";
            Mail::to($adminEmail)->send(new ContactMail($contact));
        });
    }
}
