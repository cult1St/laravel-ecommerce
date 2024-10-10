<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function start(Request $request){
        
        $request->validate([
            "profile_img" => 'required',
            'profile_img.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ], [
            'profile_img.image' => 'The profile image must be an image file',
            'profile_img.mimes' => 'The profile image must be a file of type: jpeg, png, jpg, gif, svg, webp',
            'profile_img.max' => 'The profile image may not be greater than 2048 kilobytes',
        ]);

        $user = 12;

       

        // Store the new image file
        if ($request->hasFile('profile_img')) {
          

            $images = $request->file('profile_img');
            foreach($images as $k => $image){
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $path = $image->storeAs('public/profile', $filename);
                DB::table('store_images')->insert([
                    'user_id' => $user,
                    'image_name' => $filename
                ]);
            }
           return true;
          
        } else {
           return false;
        }
        
      

    }
}
