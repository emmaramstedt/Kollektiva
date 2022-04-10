<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Support\Facades\Auth;
use App\Models\Property;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LaddaUppBostadController extends Controller
{
    public function __invoke(Request $request)
    {

        $this->validate($request, [
            'square_metres' => 'required|integer',
            'number_inhabitants' => 'integer',
            'street' => 'required|string|min:5',
            'street_number' => 'required|string',
            'post_code' => 'required|integer',
            'city' => 'required|string',
            'move_in_date' => 'required',
            'move_out_date' => 'required',
            'description' => 'required|string|min:20',
            'rent' => 'required|integer|min:4',
        ]);

        $property = new Property();
        $property->square_metres = $request->input('square_metres');
        $property->number_inhabitants = $request->input('number_inhabitants');
        $property->street = $request->input('street');
        $property->street_number = $request->input('street_number');
        $property->post_code = $request->input('post_code');
        $property->city = $request->input('city');
        $property->move_in_date = Carbon::now()->toDateTimeString();
        $property->move_out_date = Carbon::now()->toDateTimeString();
        $property->description = $request->input('description');
        $property->rent = $request->input('rent');
        $property->rooms = 6;
        $property->user_id = 1;
        $property->is_room = true;
        $property->is_house = false;
        $property->is_furnished = true;
        $property->has_fridge = true;
        $property->has_freezer = true;
        $property->has_oven = true;
        $property->has_dishwasher = true;
        $property->has_microwave = true;
        $property->private_shower = true;
        $property->private_toilet = true;
        $property->private_bath_tub = true;
        $property->has_laundry_machine = true;
        $property->has_dryer = true;
        $property->communal_laundry = true;
        $property->has_balcony = true;
        $property->has_sauna = true;
        $property->has_pool = true;
        $property->has_fireplace = true;
        $property->has_jacuzzi = true;
        $property->year_of_construction = 1980;
        $property->years_since_bathroom_renovation = 2002;
        $property->years_since_kitchen_renovation = 2002;
        $property->has_pool = true;
        $property->photo_id = 1;
        $property->save();

        $imageOneURL = 'imageOne' . time() . '.' . $request->imageOne->extension();
        $request->imageOne->move(public_path('uploads'), $imageOneURL);
        $photo = new Photo();
        $photo->url = $imageOneURL;
        $photo->description = $request->input('descriptionOne');
        $photo->property_id = $property->id;
        $photo->user_id = 12;
        $photo->save();

        $imageTwoURL = 'imageTwo' . time() . '.' . $request->imageTwo->extension();
        $request->imageTwo->move(public_path('uploads'), $imageTwoURL);
        $photo = new Photo();
        $photo->url = $imageTwoURL;
        $photo->description = $request->input('descriptionTwo');
        $photo->property_id = $property->id;
        $photo->user_id = 12;
        $photo->save();

        $imageThreeURL = 'imageThree' . time() . '.' . $request->imageThree->extension();
        $request->imageThree->move(public_path('uploads'), $imageThreeURL);
        $photo = new Photo();
        $photo->url = $imageThreeURL;
        $photo->description = $request->input('descriptionThree');
        $photo->property_id = $property->id;
        $photo->user_id = 12;
        $photo->save();

        return redirect()->to('hyrut')->with('success', 'Bostad har laddats upp.');
    }
}
