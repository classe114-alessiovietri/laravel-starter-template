<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $firstName = 'Gino';
        $lastName = 'Paoli';

        /*
            compact: crea un array associativo le cui chiavi sono le stringhe
                     che mettiamo tra le parentesi, mentre i valori di tali
                     chiavi sono i valori delle variabili con i nomi corrispondenti
                     alle stringhe inserite

            compact('firstName', 'lastName')
             |                                     |
             V                                     V

             [
                'firstName' => $firstName,
                'lastName' => $lastName,
             ]
        */

        /*
            dd: vuol dire dump and die, cioè fai il var_dump (più carino però)
                e poi stoppa l'esecuzione
        */
        // dd(compact('firstName', 'lastName'));

        return view('welcome', [
            'firstName' => $firstName,
            'lastName' => $lastName,
        ]);
        // return view('welcome', compact('firstName', 'lastName'));
    }

    public function about()
    {
        return view('about');
    }
}
