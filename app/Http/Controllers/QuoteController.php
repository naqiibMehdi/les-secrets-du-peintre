<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuoteRequest;
use App\Mail\DevisConfirmation;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class QuoteController extends Controller
{
    public function create(): View
    {
        return view("quote");
    }

    public function store(StoreQuoteRequest $request)
    {
        $validated = $request->validated();

        Mail::to($validated["email"])->send(new DevisConfirmation([
            "prenom" => $validated["first_name"],
            "nom" => $validated["last_name"],
            "email_client" => $validated["email"],
            "telephone" => $validated["phone"],
            "categories" => $validated["categories"],
            "message_client" => $validated["message"],
        ]));

        return redirect()->route("quote")->with("success", "Vos données de formulaire ont bien été envoyés");
    }
}
