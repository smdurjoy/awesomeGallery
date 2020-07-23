<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotoUploadController extends Controller
{
    function index() {
        return view('index');
    }

    function uploadPhoto(Request $request) {
        $title = $request->get('title'); 

        if($request->hasFile('photo')) {
            $image = $request->file('photo');   
            $image_name = $image->getClientOriginalName();
            $imageExtension = $image->getClientOriginalExtension();
            $imageName = $image_name.'-'.rand(111111, 999999).'.'.$imageExtension;
            $request->file('photo')->move(public_path('photos'), $imageName);
            $result = Photo::insert(['title' => $title, 'photo' => $imageName]);

            if($result == true) {
                return 1;
            } else {
                return 0;
            }
        } else {
            return "File ashe nai mama";
        }
    }

    function getData() {
        return Photo::orderBy('id', 'desc')->get();
    }

    function deleteImage($id) {
        $image = Photo::select('photo')->where('id', $id)->first();
        $imagePath = "photos/";

        if(file_exists($imagePath.$image->photo)) {
            unlink($imagePath.$image->photo);
        } 

        $result = Photo::where('id', $id)->delete();

        if($result == true) {
            return 'Success';
        } else {
            return 'Error';
        }
    }
}
