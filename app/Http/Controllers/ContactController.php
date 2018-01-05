<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TableContactForm;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
    public function controle(){
        return View('contactform'); 
    }

    public function saveContact(Request $request) {
        //creer un objet TableContactForm avec les infos de $request et l'enregistrer l'objet en base
        $contactForm = TableContactForm::create($request->except('_token'));
        // envoi par email

        Mail::to('f.riesen@aformac-vichy.fr')
                   ->send(new Contact($contactForm));
        //rediriger vers frmulaire de contact avec un message de confirmation
        return redirect('contactform')->with('message', 'Votre message a bien été envoyé.');
    }
}