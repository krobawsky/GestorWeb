<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmergencyCallReceived extends Mailable
{
    use Queueable, SerializesModels;


    public function __construct()
    {
        
    }

    public function build()
    {
        return $this->view('seguridad.codigo_email')->subject('Codigo de verificación');
    }
}
