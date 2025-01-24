<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Ensure this is correctly imported
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function completeProfile(Request $request){

            // Validate the incoming request
            $validatedData = $request->validate([
                'firstName' => 'required|string|max:255',
                'secondName' => 'nullable|string|max:255',
                'thirdName' => 'nullable|string|max:255',
                'lastName' => 'required|string|max:255',
                'selectedServices' => 'nullable|string',
                'profilePicture' => 'nullable|string', // Or file validation if uploading
                'bio' => 'nullable|string|max:1000',
            ]);


            $user = Auth::user();
            if (!$user) {
                return response()->json(['error' => 'User not authenticated'], 401);
            }


            $user->en_first_name = $validatedData['firstName'];
            $user->en_second_name = $validatedData['secondName'];
            $user->en_third_name = $validatedData['thirdName'];
            $user->en_last_name = $validatedData['lastName'];
            $user->field = $validatedData['selectedServices'];
            $user->personal_img = $validatedData['profilePicture'];
            $user->bio = $validatedData['bio'];
            $user->save();

            // Return a success response
            return response()->json(['message' => 'Profile completed successfully!'], 200);
        }

}
