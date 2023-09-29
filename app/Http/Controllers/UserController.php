<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create()
    {
        return view('user.register');
    }

    public function store(Request $request)
    {
        $cleanData = $request->validate([
            'name' => ['required', Rule::unique('users', 'name')],
            'email' => ['required', Rule::unique('users', 'email')],
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Corrected the field name
            'password' => ['required']
        ]);

        // Handle the profile image upload
        if ($request->hasFile('profile_image')) {
            $imagePath = $request->file('profile_image')->store('profile_images', 'public');
            $cleanData['profile_image'] = $imagePath; // Save the image path in the $cleanData array
        }

        User::create($cleanData);

        return redirect('/')->with('success', 'Entry created successfully');
    }
}
