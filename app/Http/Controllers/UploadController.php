<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(){

        if(Input::hasFile('file')) {
            echo 'Uploaded<br />';
            $file= Input::file('file');
            $file->move('uploads', $file->getClientOriginalName());
            echo '<img src="uploads/' . $file->getClientOriginalName() . '"/>';


        }

    }
}
