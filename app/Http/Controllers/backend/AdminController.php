<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function GetIndex()
    {
        echo "Đây là trang Admin!";
    }
}
