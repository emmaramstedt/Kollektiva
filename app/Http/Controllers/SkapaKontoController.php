<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SkapaKontoController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function viewCreateForm()
    {
        return view('/skapakonto');
    }

    public function createAccount(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:20|regex:/^[A-Za-z]+$/',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string'
        ]);

        User::create(request(['name', 'email', 'password']));

        return redirect()->to('/login')->with('Kontot skapat. Vänligen logga in.');
    }
}
