<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Form() {
        return view('pages.register');
    }

    public function Welcome(Request $request) {
        $firstname = $request['name'];
        $lastname = $request['name'];
        $gender = $request['gender'];
        $nationality = $request['Nationality'];
        $languagespoken = $request['languange'];
        $bio = $request['bio'];

        return view('pages.welcome', ['name' => $firstname, 'nama' => $lastname, 'gender' => $gender, 'Nationality' => $nationality, 'language' => $languagespoken, 'bio' => $bio]);
    }
}