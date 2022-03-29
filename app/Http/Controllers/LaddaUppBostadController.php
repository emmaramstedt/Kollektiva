<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;

class LaddaUppBostadController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'adress' => 'required|string',
            'rent' => 'required|integer|min:4',
            'description' => 'required|string|min:20',
        ]);

        $property = new Property();
        $property->adress = $request->input('address');
        $property->rent = $request->inout('rent');
        $property->description = $request->inout('description');
        $property->user_id = Auth::id();
        $property->save();

        return redirect()->to('sokbostad')->with('success', 'Bostad har laddats upp.');
    }
}
