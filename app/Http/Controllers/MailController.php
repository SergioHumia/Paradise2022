<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function sendEmail() {
        $details=[
            'title' =>  'Correo del servidor Excursiones Paradise',
            'body'  =>  'Este correo es un ejemplo para ver si funciona jeje'
        ];

        Mail::to("alexisgilcabrera@gmail.com")->send(new TestMail($details));
        return "Correo Electrónico ENVIADO";
    }
}
