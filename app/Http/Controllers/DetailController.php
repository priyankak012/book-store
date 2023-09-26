<?php

namespace App\Http\Controllers;
use App\Models\Detail;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function show()
    {
       Detail::all();
    }
}
