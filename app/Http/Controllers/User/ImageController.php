<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function details($imageId) {
        return view('users.details');
        // return $imageId;
    }

}
