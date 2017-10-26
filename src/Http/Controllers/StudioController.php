<?php

namespace Sahakavatar\StudiosModule\Http\Controllers;


use App\Http\Controllers\Controller;

class StudioController extends Controller
{
    public function getIndex()
    {
        return view("studios_module::index");
    }

}
