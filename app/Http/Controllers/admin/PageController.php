<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function dashboard(){
        return view('admin.base');
    }
}
