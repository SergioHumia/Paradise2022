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
            'body'  =>  'Le damos la bienvenida a nuestro web, esperamos que le sea de buen grado todos nuestros servicios. Un saludo, Excursiones Paradise.'
        ];

        Mail::to("exc.paradise@gmail.com")->send(new TestMail($details));
        return "Correo Electrónico ENVIADO";
    }
}
